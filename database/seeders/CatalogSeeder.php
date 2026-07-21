<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds. Every lookup is firstOrCreate() keyed on the
     * real unique column (slug/sku) so a plain `db:seed` on top of an
     * already-seeded database — not just `migrate:fresh --seed` — never
     * violates categories.slug / brands.slug / products.slug|sku. Nested
     * images/specs/inventory only get created alongside a genuinely new
     * product, so re-running doesn't pile up duplicate rows under it.
     */
    public function run(): void
    {
        $warehouse = Warehouse::query()->firstOrCreate(
            ['name' => 'Nairobi Central Warehouse'],
            ['location' => 'Industrial Area, Nairobi', 'manager' => 'Peter Kamau', 'is_active' => true]
        );

        $laptops = Category::query()->firstOrCreate(['slug' => 'laptops'], ['name' => 'Laptops', 'position' => 1]);
        $phones = Category::query()->firstOrCreate(['slug' => 'phones'], ['name' => 'Phones', 'position' => 2]);
        Category::query()->firstOrCreate(['slug' => 'ultrabooks'], ['name' => 'Ultrabooks', 'parent_id' => $laptops->id]);
        Category::query()->firstOrCreate(['slug' => 'gaming-laptops'], ['name' => 'Gaming Laptops', 'parent_id' => $laptops->id]);

        $dell = Brand::query()->firstOrCreate(['slug' => 'dell'], ['name' => 'Dell']);
        $hp = Brand::query()->firstOrCreate(['slug' => 'hp'], ['name' => 'HP']);
        $samsung = Brand::query()->firstOrCreate(['slug' => 'samsung'], ['name' => 'Samsung']);

        $products = [
            ['category_id' => $laptops->id, 'brand_id' => $dell->id, 'name' => 'Dell XPS 13', 'price' => 145000, 'quantity' => 40],
            ['category_id' => $laptops->id, 'brand_id' => $dell->id, 'name' => 'Dell Inspiron 15', 'price' => 89000, 'quantity' => 4],
            ['category_id' => $laptops->id, 'brand_id' => $hp->id, 'name' => 'HP Pavilion 14', 'price' => 76000, 'quantity' => 0],
            ['category_id' => $phones->id, 'brand_id' => $samsung->id, 'name' => 'Samsung Galaxy S24', 'price' => 129000, 'quantity' => 60],
        ];

        foreach ($products as $data) {
            $slug = str($data['name'])->slug()->toString();
            $existing = Product::query()->where('slug', $slug)->first();

            if ($existing) {
                continue;
            }

            // Product::factory()->create() rather than firstOrCreate() —
            // sku/short_description are NOT NULL with no DB default, and
            // firstOrCreate() would insert with neither since it bypasses
            // the factory's definition() entirely.
            $product = Product::factory()->create([
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'],
                'name' => $data['name'],
                'slug' => $slug,
                'price' => $data['price'],
            ]);

            $product->images()->createMany([
                ['path' => 'products/placeholder-1.jpg', 'alt' => $data['name'], 'position' => 0],
                ['path' => 'products/placeholder-2.jpg', 'alt' => $data['name'], 'position' => 1],
            ]);

            $product->specifications()->createMany([
                ['group' => 'Display', 'label' => 'Size', 'value' => '13.4-inch FHD+', 'position' => 0],
                ['group' => 'Processor', 'label' => 'CPU', 'value' => 'Intel Core i7', 'position' => 1],
                ['group' => 'Memory', 'label' => 'RAM', 'value' => '16GB', 'position' => 2],
            ]);

            InventoryItem::factory()->create([
                'warehouse_id' => $warehouse->id,
                'product_id' => $product->id,
                'quantity' => $data['quantity'],
                'low_stock_threshold' => 5,
            ]);
        }

        if (! Product::query()->where('slug', 'samsung-galaxy-buds-flash-sale')->exists()) {
            $flashDeal = Product::factory()->flashDeal()->create([
                'category_id' => $phones->id,
                'brand_id' => $samsung->id,
                'name' => 'Samsung Galaxy Buds Flash Sale',
                'slug' => 'samsung-galaxy-buds-flash-sale',
                'price' => 8500,
            ]);

            $flashDeal->images()->create(['path' => 'products/placeholder-1.jpg', 'position' => 0]);
        }
    }
}
