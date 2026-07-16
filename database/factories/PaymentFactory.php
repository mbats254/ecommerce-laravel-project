<?php

namespace Database\Factories;

use App\Enums\PaymentProvider;
use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'provider' => PaymentProvider::Cash,
            'provider_reference' => null,
            'amount' => fake()->randomFloat(2, 1000, 200_000),
            'status' => PaymentStatus::Pending,
            'paid_at' => null,
        ];
    }

    /**
     * Indicate the payment succeeded.
     */
    public function successful(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => PaymentStatus::Successful,
            'paid_at' => now(),
        ]);
    }
}
