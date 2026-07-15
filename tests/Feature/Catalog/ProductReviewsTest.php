<?php

use App\Models\Product;
use App\Models\Review;

test('only approved reviews are listed for a product', function () {
    $product = Product::factory()->create(['slug' => 'dell-xps-13']);
    Review::factory()->for($product)->approved()->create(['title' => 'Great laptop']);
    Review::factory()->for($product)->create(); // pending
    Review::factory()->for($product)->rejected()->create();

    $response = $this->getJson('/api/v1/products/dell-xps-13/reviews');

    $response->assertOk();
    expect($response->json('meta.total'))->toBe(1)
        ->and($response->json('data.0.title'))->toBe('Great laptop');
});
