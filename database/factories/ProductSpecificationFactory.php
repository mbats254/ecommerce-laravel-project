<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductSpecification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProductSpecification>
 */
class ProductSpecificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'group' => fake()->randomElement(['Display', 'Processor', 'Memory', 'Connectivity']),
            'label' => fake()->word(),
            'value' => fake()->words(2, true),
            'position' => 0,
        ];
    }
}
