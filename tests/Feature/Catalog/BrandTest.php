<?php

use App\Models\Brand;

test('only active brands are listed publicly', function () {
    Brand::factory()->create(['is_active' => true]);
    Brand::factory()->create(['is_active' => false]);

    $response = $this->getJson('/api/v1/brands');

    $response->assertOk()->assertJsonCount(1);
});

test('a brand can be fetched by slug', function () {
    Brand::factory()->create(['slug' => 'dell']);

    $this->getJson('/api/v1/brands/dell')->assertOk()->assertJsonPath('slug', 'dell');
});
