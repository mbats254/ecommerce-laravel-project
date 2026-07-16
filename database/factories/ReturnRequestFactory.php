<?php

namespace Database\Factories;

use App\Enums\ReturnStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ReturnRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ReturnRequest>
 */
class ReturnRequestFactory extends Factory
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
            'order_item_id' => OrderItem::factory(),
            'reason' => fake()->sentence(),
            'status' => ReturnStatus::Requested,
            'requested_at' => now(),
        ];
    }
}
