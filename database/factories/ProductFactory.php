<?php

namespace Database\Factories;

use App\Enums\ProductStatus;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->words(3, true);
        $price = fake()->randomFloat(2, 500, 200_000);

        return [
            'category_id' => Category::factory(),
            'brand_id' => Brand::factory(),
            'name' => Str::title($name),
            'slug' => Str::slug($name),
            'sku' => strtoupper(fake()->unique()->bothify('SKU-####-???')),
            'short_description' => fake()->sentence(),
            'description' => fake()->paragraphs(3, true),
            'price' => $price,
            'compare_at_price' => null,
            'status' => ProductStatus::Active,
            'is_featured' => false,
            'is_flash_deal' => false,
            'flash_deal_ends_at' => null,
        ];
    }

    /**
     * Indicate that the product is a draft (not publicly visible).
     */
    public function draft(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => ProductStatus::Draft,
        ]);
    }

    /**
     * Indicate that the product is an active flash deal.
     */
    public function flashDeal(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_flash_deal' => true,
            'compare_at_price' => fake()->randomFloat(2, 600, 250_000),
            'flash_deal_ends_at' => now()->addDays(3),
        ]);
    }
}
