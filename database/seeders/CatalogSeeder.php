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
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouse = Warehouse::factory()->create([
            'name' => 'Nairobi Central Warehouse',
            'location' => 'Industrial Area, Nairobi',
            'manager' => 'Peter Kamau',
        ]);

        $laptops = Category::factory()->create(['name' => 'Laptops', 'slug' => 'laptops', 'position' => 1]);
        $phones = Category::factory()->create(['name' => 'Phones', 'slug' => 'phones', 'position' => 2]);
        Category::factory()->create(['name' => 'Ultrabooks', 'slug' => 'ultrabooks', 'parent_id' => $laptops->id]);
        Category::factory()->create(['name' => 'Gaming Laptops', 'slug' => 'gaming-laptops', 'parent_id' => $laptops->id]);

        $dell = Brand::factory()->create(['name' => 'Dell', 'slug' => 'dell']);
        $hp = Brand::factory()->create(['name' => 'HP', 'slug' => 'hp']);
        $samsung = Brand::factory()->create(['name' => 'Samsung', 'slug' => 'samsung']);

        $products = [
            ['category_id' => $laptops->id, 'brand_id' => $dell->id, 'name' => 'Dell XPS 13', 'price' => 145000, 'quantity' => 40],
            ['category_id' => $laptops->id, 'brand_id' => $dell->id, 'name' => 'Dell Inspiron 15', 'price' => 89000, 'quantity' => 4],
            ['category_id' => $laptops->id, 'brand_id' => $hp->id, 'name' => 'HP Pavilion 14', 'price' => 76000, 'quantity' => 0],
            ['category_id' => $phones->id, 'brand_id' => $samsung->id, 'name' => 'Samsung Galaxy S24', 'price' => 129000, 'quantity' => 60],
        ];

        foreach ($products as $data) {
            $product = Product::factory()->create([
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'],
                'name' => $data['name'],
                'slug' => str($data['name'])->slug(),
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

        Product::factory()
            ->flashDeal()
            ->create([
                'category_id' => $phones->id,
                'brand_id' => $samsung->id,
                'name' => 'Samsung Galaxy Buds Flash Sale',
                'slug' => 'samsung-galaxy-buds-flash-sale',
                'price' => 8500,
            ])
            ->images()->create(['path' => 'products/placeholder-1.jpg', 'position' => 0]);
    }
}
