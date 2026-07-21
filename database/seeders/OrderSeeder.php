<?php

namespace Database\Seeders;

use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use App\Enums\ReturnStatus;
use App\Models\Address;
use App\Models\Order;
use App\Models\Product;
use App\Models\ReturnRequest;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * Runs after UserSeeder (customers + addresses) and CatalogSeeder (products).
 * One order per point in the state machine (pending -> ... -> delivered,
 * plus the cancelled/refunded terminal branches) so every admin order-list
 * filter and the customer order-history view both have realistic data —
 * including one delivered order with a return request already filed.
 */
class OrderSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $customers = User::query()->doesntHave('roles')->get();
        $products = Product::query()->inRandomOrder()->take(4)->get();

        if ($customers->isEmpty() || $products->isEmpty()) {
            $this->command->getOutput()->writeln('  <comment>Skipping OrderSeeder — no customers/products found yet.</comment>');

            return;
        }

        $scenarios = [
            ['status' => OrderStatus::Pending, 'method' => PaymentMethod::CashOnDelivery, 'daysAgo' => 1],
            ['status' => OrderStatus::Processing, 'method' => PaymentMethod::Mpesa, 'daysAgo' => 2],
            ['status' => OrderStatus::Packing, 'method' => PaymentMethod::Card, 'daysAgo' => 3],
            ['status' => OrderStatus::Shipped, 'method' => PaymentMethod::Mpesa, 'daysAgo' => 5],
            ['status' => OrderStatus::Delivered, 'method' => PaymentMethod::CashOnDelivery, 'daysAgo' => 10],
            ['status' => OrderStatus::Delivered, 'method' => PaymentMethod::Card, 'daysAgo' => 14],
            ['status' => OrderStatus::Cancelled, 'method' => PaymentMethod::CashOnDelivery, 'daysAgo' => 4],
            ['status' => OrderStatus::Refunded, 'method' => PaymentMethod::Mpesa, 'daysAgo' => 20],
        ];

        foreach ($scenarios as $index => $scenario) {
            $customer = $customers[$index % $customers->count()];
            $address = $customer->addresses()->first() ?? Address::factory()->for($customer)->create();
            $lines = [[$products[$index % $products->count()], random_int(1, 2)]];

            $this->createOrder(
                $customer,
                $address,
                $lines,
                $scenario['status'],
                $scenario['method'],
                now()->subDays($scenario['daysAgo']),
            );
        }

        $orderWithReturn = Order::query()->where('status', OrderStatus::Delivered)->first();

        if ($orderWithReturn) {
            ReturnRequest::factory()->create([
                'order_id' => $orderWithReturn->id,
                'order_item_id' => $orderWithReturn->items()->first()->id,
                'reason' => 'Item arrived with a manufacturing defect.',
                'status' => ReturnStatus::Requested,
            ]);
        }
    }

    /**
     * @param  array<int, array{0: Product, 1: int}>  $lines
     */
    private function createOrder(
        User $customer,
        Address $address,
        array $lines,
        OrderStatus $status,
        PaymentMethod $paymentMethod,
        Carbon $placedAt,
    ): Order {
        $subtotal = collect($lines)->sum(fn (array $line) => $line[0]->price * $line[1]);
        $deliveryFee = 300;
        $vat = round($subtotal * 0.16, 2);
        $total = $subtotal + $deliveryFee + $vat;

        $order = Order::factory()->create([
            'user_id' => $customer->id,
            'shipping_address_id' => $address->id,
            'status' => $status,
            'subtotal' => $subtotal,
            'delivery_fee' => $deliveryFee,
            'vat' => $vat,
            'total' => $total,
            'payment_method' => $paymentMethod,
            'placed_at' => $placedAt,
        ]);

        foreach ($lines as [$product, $quantity]) {
            $order->items()->create([
                'product_id' => $product->id,
                'product_name' => $product->name,
                'sku' => $product->sku,
                'quantity' => $quantity,
                'unit_price' => $product->price,
                'total' => $product->price * $quantity,
            ]);
        }

        foreach ($this->statusProgression($status) as $step => $historyStatus) {
            $order->statusHistory()->create([
                'status' => $historyStatus,
                'occurred_at' => $placedAt->copy()->addHours($step * 6),
            ]);
        }

        $order->payments()->create([
            'provider' => $paymentMethod->provider(),
            'provider_reference' => strtoupper(Str::random(10)),
            'amount' => $total,
            'status' => $status === OrderStatus::Cancelled ? PaymentStatus::Failed : PaymentStatus::Successful,
            'paid_at' => $status === OrderStatus::Cancelled ? null : $placedAt,
        ]);

        return $order;
    }

    /**
     * @return array<int, OrderStatus>
     */
    private function statusProgression(OrderStatus $status): array
    {
        $fullProgression = [
            OrderStatus::Pending,
            OrderStatus::Processing,
            OrderStatus::Packing,
            OrderStatus::Shipped,
            OrderStatus::Delivered,
        ];

        return match ($status) {
            OrderStatus::Cancelled => [OrderStatus::Pending, OrderStatus::Cancelled],
            OrderStatus::Refunded => [...$fullProgression, OrderStatus::Refunded],
            default => array_slice($fullProgression, 0, array_search($status, $fullProgression, strict: true) + 1),
        };
    }
}
