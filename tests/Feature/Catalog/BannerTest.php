<?php

use App\Models\Banner;

test('active banners with no start or end date are always listed', function () {
    Banner::factory()->create(['title' => 'Always On']);

    $response = $this->getJson('/api/v1/banners');

    $response->assertOk()->assertJsonCount(1)->assertJsonPath('0.title', 'Always On');
});

test('an inactive banner is not listed', function () {
    Banner::factory()->create(['is_active' => false]);

    $this->getJson('/api/v1/banners')->assertOk()->assertJsonCount(0);
});

test('a banner that has not started yet is not listed', function () {
    Banner::factory()->create(['starts_at' => now()->addDay()]);

    $this->getJson('/api/v1/banners')->assertOk()->assertJsonCount(0);
});

test('an expired banner is not listed', function () {
    Banner::factory()->create(['expires_at' => now()->subDay()]);

    $this->getJson('/api/v1/banners')->assertOk()->assertJsonCount(0);
});

test('a banner within its active window is listed', function () {
    Banner::factory()->create(['starts_at' => now()->subDay(), 'expires_at' => now()->addDay()]);

    $this->getJson('/api/v1/banners')->assertOk()->assertJsonCount(1);
});

test('banners can be filtered by position', function () {
    Banner::factory()->create(['position' => 'homepage_hero']);
    Banner::factory()->create(['position' => 'category_top']);

    $response = $this->getJson('/api/v1/banners?position=category_top');

    $response->assertOk()->assertJsonCount(1)->assertJsonPath('0.position', 'category_top');
});
