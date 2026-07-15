<?php

use App\Models\Brand;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Catalog Manager');
});

test('a catalog manager can create a brand', function () {
    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/brands', [
        'name' => 'Dell',
        'slug' => 'dell',
    ]);

    $response->assertCreated()->assertJsonPath('slug', 'dell');
});

test('a catalog manager can update a brand', function () {
    $brand = Brand::factory()->create(['is_active' => true]);

    $response = $this->actingAs($this->admin)->putJson("/api/v1/admin/brands/{$brand->id}", [
        'is_active' => false,
    ]);

    $response->assertOk()->assertJsonPath('isActive', false);
});

test('a catalog manager can delete a brand', function () {
    $brand = Brand::factory()->create();

    $response = $this->actingAs($this->admin)->deleteJson("/api/v1/admin/brands/{$brand->id}");

    $response->assertNoContent();
    $this->assertSoftDeleted($brand);
});
