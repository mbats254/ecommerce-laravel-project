<?php

namespace App\Actions\Returns;

use App\Actions\Order\TransitionOrderStatusAction;
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use App\Enums\ReturnStatus;
use App\Models\InventoryItem;
use App\Models\ReturnRequest;
use Illuminate\Support\Facades\DB;

class ProcessRefundAction
{
    public function __construct(
        private readonly TransitionOrderStatusAction $transitionOrderStatus,
    ) {}

    public function handle(ReturnRequest $return): ReturnRequest
    {
        return DB::transaction(function () use ($return) {
            $return->loadMissing(['orderItem', 'order.items']);

            $orderItem = $return->orderItem;
            $order = $return->order;

            $this->restock($orderItem->product_id, $orderItem->quantity);

            $return->update(['status' => ReturnStatus::Refunded]);

            $order->payments()->create([
                'provider' => $order->payment_method->provider(),
                'provider_reference' => null,
                'amount' => -$orderItem->total,
                'status' => PaymentStatus::Successful,
                'paid_at' => now(),
            ]);

            $refundedItemIds = ReturnRequest::query()
                ->where('order_id', $order->id)
                ->where('status', ReturnStatus::Refunded)
                ->pluck('order_item_id');

            $allItemsRefunded = $order->items->pluck('id')->diff($refundedItemIds)->isEmpty();

            if ($allItemsRefunded) {
                $this->transitionOrderStatus->handle(
                    $order->fresh(),
                    OrderStatus::Refunded,
                    'Order fully refunded via returns.',
                );
            }

            return $return->fresh(['order', 'orderItem']);
        });
    }

    /**
     * Inventory is fungible across warehouses for a given product, so
     * restoring to the first row (by the same deterministic order
     * PlaceOrderAction decrements in) is equivalent to reversing the exact
     * original allocation.
     */
    private function restock(string $productId, int $quantity): void
    {
        InventoryItem::query()
            ->where('product_id', $productId)
            ->lockForUpdate()
            ->orderBy('id')
            ->first()
            ?->increment('quantity', $quantity);
    }
}
