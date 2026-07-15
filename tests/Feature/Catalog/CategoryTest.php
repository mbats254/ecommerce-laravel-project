<?php

use App\Models\Category;

test('the category tree only includes active root categories with nested children', function () {
    $root = Category::factory()->create(['parent_id' => null, 'is_active' => true, 'position' => 1]);
    Category::factory()->create(['parent_id' => $root->id, 'is_active' => true]);
    Category::factory()->create(['parent_id' => null, 'is_active' => false]);

    $response = $this->getJson('/api/v1/categories');

    $response->assertOk()->assertJsonCount(1);
    expect($response->json('0.children'))->toHaveCount(1);
});

test('a category can be fetched by slug with its breadcrumb', function () {
    $root = Category::factory()->create(['slug' => 'electronics', 'parent_id' => null]);
    $child = Category::factory()->create(['slug' => 'laptops', 'parent_id' => $root->id]);

    $response = $this->getJson('/api/v1/categories/laptops');

    $response->assertOk()
        ->assertJsonPath('slug', 'laptops')
        ->assertJsonPath('breadcrumb.0.slug', 'electronics');
});
