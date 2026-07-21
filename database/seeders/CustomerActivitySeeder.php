<?php

namespace Database\Seeders;

use App\Models\CompareListItem;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Runs after UserSeeder and CatalogSeeder — wishlist/compare entries for
 * customers so those endpoints aren't empty on a fresh seed.
 */
class CustomerActivitySeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $customers = User::query()->doesntHave('roles')->take(2)->get();
        $products = Product::query()->inRandomOrder()->take(4)->get();

        if ($customers->isEmpty() || $products->isEmpty()) {
            $this->command->getOutput()->writeln('  <comment>Skipping CustomerActivitySeeder — no customers/products found yet.</comment>');

            return;
        }

        foreach ($customers as $customer) {
            foreach ($products->take(2) as $product) {
                // firstOrCreate(), not factory()->create() — wishlists has a
                // unique(user_id, product_id) constraint, so re-running this
                // seeder on top of an already-seeded database must not
                // insert the same pair twice.
                Wishlist::query()->firstOrCreate(['user_id' => $customer->id, 'product_id' => $product->id]);
            }

            foreach ($products->take(3) as $product) {
                // Same reasoning — compare_lists has the same constraint.
                CompareListItem::query()->firstOrCreate(['user_id' => $customer->id, 'product_id' => $product->id]);
            }
        }
    }
}
