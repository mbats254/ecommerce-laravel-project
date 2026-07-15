<?php

use App\Models\Product;

test('only active, unexpired flash deals are listed', function () {
    Product::factory()->flashDeal()->create(['flash_deal_ends_at' => now()->addDay()]);
    Product::factory()->flashDeal()->create(['flash_deal_ends_at' => now()->subDay()]);
    Product::factory()->create(); // not a flash deal

    $response = $this->getJson('/api/v1/flash-deals');

    $response->assertOk()->assertJsonCount(1);
    expect($response->json('0.isFlashDeal'))->toBeTrue();
});
