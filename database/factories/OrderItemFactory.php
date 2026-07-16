<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quantity = fake()->numberBetween(1, 3);
        $unitPrice = fake()->randomFloat(2, 500, 200_000);

        return [
            'order_id' => Order::factory(),
            'product_id' => Product::factory(),
            'variant_id' => null,
            'product_name' => fake()->words(3, true),
            'sku' => strtoupper(fake()->unique()->bothify('SKU-####-???')),
            'quantity' => $quantity,
            'unit_price' => $unitPrice,
            'total' => $quantity * $unitPrice,
        ];
    }
}
