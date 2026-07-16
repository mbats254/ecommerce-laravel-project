<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Models\Address;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subtotal = fake()->randomFloat(2, 1000, 200_000);
        $deliveryFee = 300;
        $vat = round($subtotal * 0.16, 2);

        return [
            'order_number' => 'AT'.fake()->unique()->numberBetween(10_000, 999_999),
            'user_id' => User::factory(),
            'status' => OrderStatus::Pending,
            'subtotal' => $subtotal,
            'delivery_fee' => $deliveryFee,
            'vat' => $vat,
            'total' => $subtotal + $deliveryFee + $vat,
            'payment_method' => PaymentMethod::CashOnDelivery,
            'shipping_address_id' => Address::factory(),
            'coupon_id' => null,
            'placed_at' => now(),
        ];
    }
}
