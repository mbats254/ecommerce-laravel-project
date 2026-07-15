<?php

use App\Models\Category;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Catalog Manager');
});

test('a catalog manager can create a category', function () {
    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/categories', [
        'name' => 'Laptops',
        'slug' => 'laptops',
    ]);

    $response->assertCreated()->assertJsonPath('slug', 'laptops');
});

test('a catalog manager can update a category', function () {
    $category = Category::factory()->create(['name' => 'Old Name']);

    $response = $this->actingAs($this->admin)->putJson("/api/v1/admin/categories/{$category->id}", [
        'name' => 'New Name',
    ]);

    $response->assertOk()->assertJsonPath('name', 'New Name');
});

test('a catalog manager can delete a category', function () {
    $category = Category::factory()->create();

    $response = $this->actingAs($this->admin)->deleteJson("/api/v1/admin/categories/{$category->id}");

    $response->assertNoContent();
    $this->assertSoftDeleted($category);
});

test('a restricted role cannot manage categories', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $this->actingAs($marketer)->postJson('/api/v1/admin/categories', [
        'name' => 'Laptops',
        'slug' => 'laptops',
    ])->assertForbidden();
});
