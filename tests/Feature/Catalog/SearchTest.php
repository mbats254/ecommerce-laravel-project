<?php

use App\Enums\ProductStatus;
use App\Models\Product;

test('search requires a query string', function () {
    $this->getJson('/api/v1/search')->assertUnprocessable()->assertJsonValidationErrors('q');
});

test('a search matches by product name', function () {
    Product::factory()->create(['name' => 'Dell XPS 13']);
    Product::factory()->create(['name' => 'Samsung Galaxy S23']);

    $response = $this->getJson('/api/v1/search?q=Dell');

    $response->assertOk()->assertJsonCount(1)->assertJsonPath('0.name', 'Dell XPS 13');
});

test('a search matches by sku', function () {
    Product::factory()->create(['name' => 'Dell XPS 13', 'sku' => 'DELL-XPS-13-SKU']);
    Product::factory()->create(['name' => 'Samsung Galaxy S23', 'sku' => 'SGS23-SKU']);

    $response = $this->getJson('/api/v1/search?q=SGS23');

    $response->assertOk()->assertJsonCount(1)->assertJsonPath('0.sku', 'SGS23-SKU');
});

test('draft and archived products are not returned by search', function () {
    Product::factory()->create(['name' => 'Active Laptop']);
    Product::factory()->draft()->create(['name' => 'Draft Laptop']);
    Product::factory()->create(['name' => 'Archived Laptop', 'status' => ProductStatus::Archived]);

    $response = $this->getJson('/api/v1/search?q=Laptop');

    $response->assertOk()->assertJsonCount(1)->assertJsonPath('0.name', 'Active Laptop');
});

test('an unmatched query returns an empty result set', function () {
    Product::factory()->create(['name' => 'Dell XPS 13']);

    $this->getJson('/api/v1/search?q=nonexistent-product-xyz')->assertOk()->assertJsonCount(0);
});
