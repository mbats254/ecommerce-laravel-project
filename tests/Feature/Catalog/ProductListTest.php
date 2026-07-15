<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

test('the products list matches the PaginatedResponse contract shape', function () {
    Product::factory()->count(3)->create();

    $response = $this->getJson('/api/v1/products');

    $response->assertOk()
        ->assertJsonStructure([
            'data' => [
                ['id', 'name', 'slug', 'sku', 'shortDescription', 'price', 'stockStatus', 'category' => ['id', 'name', 'slug'], 'brand' => ['id', 'name', 'slug']],
            ],
            'meta' => ['currentPage', 'perPage', 'total', 'lastPage'],
        ])
        ->assertJsonMissingPath('links');
});

test('products can be filtered by category slug and brand slugs, and sorted by price ascending', function () {
    $laptops = Category::factory()->create(['slug' => 'laptops']);
    $phones = Category::factory()->create(['slug' => 'phones']);
    $dell = Brand::factory()->create(['slug' => 'dell']);
    $hp = Brand::factory()->create(['slug' => 'hp']);
    $samsung = Brand::factory()->create(['slug' => 'samsung']);

    Product::factory()->create(['category_id' => $laptops->id, 'brand_id' => $dell->id, 'price' => 145000]);
    Product::factory()->create(['category_id' => $laptops->id, 'brand_id' => $dell->id, 'price' => 89000]);
    Product::factory()->create(['category_id' => $laptops->id, 'brand_id' => $hp->id, 'price' => 76000]);
    Product::factory()->create(['category_id' => $phones->id, 'brand_id' => $samsung->id, 'price' => 129000]);

    $response = $this->getJson('/api/v1/products?categorySlug=laptops&brandSlugs[]=dell&sort=price_asc');

    $response->assertOk();
    $names = collect($response->json('data'))->pluck('price');

    expect($response->json('meta.total'))->toBe(2)
        ->and($names->all())->toBe([89000, 145000]);

    foreach ($response->json('data') as $product) {
        expect($product['category']['slug'])->toBe('laptops')
            ->and($product['brand']['slug'])->toBe('dell');
    }
});

test('products can be filtered by price range', function () {
    Product::factory()->create(['price' => 5000]);
    Product::factory()->create(['price' => 50000]);
    Product::factory()->create(['price' => 150000]);

    $response = $this->getJson('/api/v1/products?priceMin=10000&priceMax=100000');

    $response->assertOk();
    expect($response->json('meta.total'))->toBe(1)
        ->and($response->json('data.0.price'))->toBe(50000);
});

test('draft and archived products are not listed publicly', function () {
    Product::factory()->draft()->create();
    Product::factory()->create(); // active

    $response = $this->getJson('/api/v1/products');

    expect($response->json('meta.total'))->toBe(1);
});
