<?php

use App\Models\Banner;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Marketing');
});

test('marketing can create, update, and delete banners', function () {
    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/banners', [
        'title' => 'Summer Sale',
        'image_path' => 'banners/summer.jpg',
        'position' => 'homepage_hero',
    ]);

    $response->assertCreated()->assertJsonPath('position', 'homepage_hero');

    $banner = Banner::query()->where('title', 'Summer Sale')->firstOrFail();

    $this->actingAs($this->admin)->putJson("/api/v1/admin/banners/{$banner->id}", ['is_active' => false])
        ->assertOk()->assertJsonPath('isActive', false);

    $this->actingAs($this->admin)->deleteJson("/api/v1/admin/banners/{$banner->id}")->assertNoContent();
});

test('the public banners endpoint only returns active banners within their date window, filtered by position', function () {
    Banner::factory()->create(['position' => 'homepage_hero', 'is_active' => true]);
    Banner::factory()->create(['position' => 'homepage_top', 'is_active' => true]);
    Banner::factory()->create(['position' => 'homepage_hero', 'is_active' => false]);
    Banner::factory()->create(['position' => 'homepage_hero', 'is_active' => true, 'expires_at' => now()->subDay()]);

    $response = $this->getJson('/api/v1/banners?position=homepage_hero');

    $response->assertOk()->assertJsonCount(1);
});

test('a restricted role cannot manage banners', function () {
    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    $this->actingAs($catalogManager)->postJson('/api/v1/admin/banners', [
        'title' => 'x', 'image_path' => 'x.jpg', 'position' => 'homepage_hero',
    ])->assertForbidden();
});
