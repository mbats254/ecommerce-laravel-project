<?php

namespace App\Actions\Checkout;

use App\Actions\Marketing\ValidateCouponAction;
use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use App\Enums\ProductStatus;
use App\Events\OrderPlaced;
use App\Models\Cart;
use App\Models\InventoryItem;
use App\Models\Order;
use App\Models\User;
use App\Payments\PaymentGatewayManager;
use App\Services\OrderNumberGenerator;
use App\Services\PricingService;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PlaceOrderAction
{
    public function __construct(
        private readonly PricingService $pricing,
        private readonly ValidateCouponAction $validateCoupon,
        private readonly OrderNumberGenerator $orderNumbers,
        private readonly PaymentGatewayManager $gateways,
    ) {}

    /**
     * @param  array{shippingAddressId: string, deliveryMethod: string, paymentMethod: string, couponCode?: ?string}  $data
     */
    public function handle(User $user, Cart $cart, array $data): Order
    {
        $cart->loadMissing(['items.product', 'items.variant']);

        if ($cart->items->isEmpty()) {
            throw ValidationException::withMessages(['cart' => ['Your cart is empty.']]);
        }

        // Checkout always re-validates current price and stock — a cart
        // item's unit_price is only a snapshot from add-time and must never
        // be trusted for what the customer is actually charged.
        foreach ($cart->items as $item) {
            $item->product->refresh();

            if ($item->product->status !== ProductStatus::Active) {
                throw ValidationException::withMessages([
                    'cart' => ["{$item->product->name} is no longer available."],
                ]);
            }

            $item->unit_price = $item->product->price + ($item->variant->price_delta ?? 0);
        }

        $discount = 0;
        $coupon = null;

        if (! empty($data['couponCode'])) {
            $subtotal = (float) $cart->items->sum(fn ($item) => $item->unit_price * $item->quantity);
            $result = $this->validateCoupon->handle($data['couponCode'], $subtotal);
            $coupon = $result['coupon'];
            $discount = $result['discount'];
        }

        $pricing = $this->pricing->calculate($cart->items, $discount, $data['deliveryMethod']);
        $paymentMethod = PaymentMethod::from($data['paymentMethod']);

        return DB::transaction(function () use ($user, $cart, $data, $pricing, $coupon, $paymentMethod) {
            foreach ($cart->items as $item) {
                $this->decrementStock($item->product_id, $item->quantity, $item->product->name);
            }

            $order = Order::create([
                'order_number' => $this->orderNumbers->generate(),
                'user_id' => $user->id,
                'status' => OrderStatus::Pending,
                'subtotal' => $pricing['subtotal'],
                'delivery_fee' => $pricing['deliveryFee'],
                'vat' => $pricing['vat'],
                'total' => $pricing['total'],
                'payment_method' => $paymentMethod,
                'shipping_address_id' => $data['shippingAddressId'],
                'coupon_id' => $coupon?->id,
                'placed_at' => now(),
            ]);

            foreach ($cart->items as $item) {
                $order->items()->create([
                    'product_id' => $item->product_id,
                    'variant_id' => $item->variant_id,
                    'product_name' => $item->product->name,
                    'sku' => $item->variant->sku ?? $item->product->sku,
                    'quantity' => $item->quantity,
                    'unit_price' => $item->unit_price,
                    'total' => $item->unit_price * $item->quantity,
                ]);
            }

            $order->statusHistory()->create([
                'status' => OrderStatus::Pending,
                'occurred_at' => now(),
            ]);

            $coupon?->increment('used_count');

            $cart->items()->delete();
            $cart->delete();

            $intent = $this->gateways->driver($paymentMethod->value)->initiate($order);

            $order->payments()->create([
                'provider' => $paymentMethod->provider(),
                'provider_reference' => $intent->reference,
                'amount' => $order->total,
                'status' => $intent->status,
                'paid_at' => $intent->status === PaymentStatus::Successful ? now() : null,
            ]);

            // Eager load before dispatching: queued listeners receive a
            // freshly re-hydrated $order (SerializesModels re-fetches by ID
            // with no relations), so CheckForLowStockAfterOrder's per-item
            // ->product access would otherwise be a lazy load.
            $order->load(['items.product', 'shippingAddress', 'payments']);

            event(new OrderPlaced($order));

            // Not fresh(): fresh() rehydrates a new instance and silently
            // clears wasRecentlyCreated, which JsonResource uses to decide
            // the response status (201 vs 200).
            return $order;
        });
    }

    /**
     * Locks every inventory row for this product across all warehouses and
     * decrements until the required quantity is covered. If the locked
     * total can't cover it, the whole transaction rolls back — this is the
     * concrete fix for two concurrent checkouts both "succeeding" against
     * the last unit in stock.
     */
    private function decrementStock(string $productId, int $quantity, string $productName): void
    {
        $inventoryItems = InventoryItem::query()
            ->where('product_id', $productId)
            ->lockForUpdate()
            ->orderBy('id')
            ->get();

        if ($inventoryItems->sum('quantity') < $quantity) {
            throw ValidationException::withMessages([
                'cart' => ["Not enough stock available for {$productName}."],
            ]);
        }

        $remaining = $quantity;

        foreach ($inventoryItems as $inventoryItem) {
            if ($remaining <= 0) {
                break;
            }

            $deduct = min($inventoryItem->quantity, $remaining);
            $inventoryItem->decrement('quantity', $deduct);
            $remaining -= $deduct;
        }
    }
}
