<?php

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpecification;

test('a product can be fetched by slug with images and specifications', function () {
    $product = Product::factory()->create(['slug' => 'dell-xps-13']);
    ProductImage::factory()->for($product)->create();
    ProductSpecification::factory()->for($product)->create(['group' => 'Display', 'label' => 'Size', 'value' => '13-inch']);

    $response = $this->getJson('/api/v1/products/dell-xps-13');

    $response->assertOk()
        ->assertJsonPath('slug', 'dell-xps-13')
        ->assertJsonCount(1, 'images')
        ->assertJsonPath('specifications.0.label', 'Size');
});

test('a draft product is not reachable by slug', function () {
    $product = Product::factory()->draft()->create(['slug' => 'hidden-product']);

    $this->getJson('/api/v1/products/hidden-product')->assertNotFound();
});

test('an unknown product slug returns 404', function () {
    $this->getJson('/api/v1/products/does-not-exist')->assertNotFound();
});
