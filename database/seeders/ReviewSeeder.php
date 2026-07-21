<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Runs after UserSeeder and CatalogSeeder — needs customers and products to
 * already exist. Seeds a mix of statuses so the admin moderation queue
 * (pending) and the storefront's own review list (approved only) both have
 * something to show.
 */
class ReviewSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $customers = User::query()->doesntHave('roles')->get();
        $products = Product::query()->inRandomOrder()->take(4)->get();

        if ($customers->isEmpty() || $products->isEmpty()) {
            $this->command->getOutput()->writeln('  <comment>Skipping ReviewSeeder — no customers/products found yet.</comment>');

            return;
        }

        $reviews = [
            ['rating' => 5, 'title' => 'Excellent product', 'body' => 'Exactly as described, fast delivery. Highly recommend.', 'status' => 'approved'],
            ['rating' => 4, 'title' => 'Very good', 'body' => 'Works well, battery life could be better.', 'status' => 'approved'],
            ['rating' => 3, 'title' => 'Decent for the price', 'body' => 'Does the job but nothing special.', 'status' => 'approved'],
            ['rating' => 5, 'title' => 'Awaiting moderation', 'body' => 'Great value, will buy again.', 'status' => 'pending'],
            ['rating' => 2, 'title' => 'Not as expected', 'body' => 'Packaging was damaged on arrival.', 'status' => 'rejected'],
        ];

        foreach ($reviews as $index => $data) {
            Review::factory()->create([
                'product_id' => $products[$index % $products->count()]->id,
                'user_id' => $customers[$index % $customers->count()]->id,
                'rating' => $data['rating'],
                'title' => $data['title'],
                'body' => $data['body'],
                'status' => $data['status'],
            ]);
        }
    }
}
