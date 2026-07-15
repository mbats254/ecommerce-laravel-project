<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Catalog Manager');
    $this->category = Category::factory()->create();
    $this->brand = Brand::factory()->create();
});

test('a catalog manager can create a product with specifications', function () {
    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/products', [
        'category_id' => $this->category->id,
        'brand_id' => $this->brand->id,
        'name' => 'Dell XPS 13',
        'slug' => 'dell-xps-13',
        'sku' => 'SKU-0001',
        'short_description' => 'A great ultrabook.',
        'price' => 145000,
        'specifications' => [
            ['group' => 'Display', 'label' => 'Size', 'value' => '13-inch'],
        ],
    ]);

    $response->assertCreated()
        ->assertJsonPath('slug', 'dell-xps-13')
        ->assertJsonPath('status', 'draft')
        ->assertJsonCount(1, 'specifications');
});

test('creating a product rejects a compareAtPrice lower than price', function () {
    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/products', [
        'category_id' => $this->category->id,
        'brand_id' => $this->brand->id,
        'name' => 'Dell XPS 13',
        'slug' => 'dell-xps-13',
        'sku' => 'SKU-0001',
        'short_description' => 'A great ultrabook.',
        'price' => 145000,
        'compare_at_price' => 100000,
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('compare_at_price');
});

test('draft products are visible to admins but not the public', function () {
    $product = Product::factory()->draft()->create();

    $this->actingAs($this->admin)->getJson("/api/v1/admin/products/{$product->id}")->assertOk();
    $this->getJson("/api/v1/products/{$product->slug}")->assertNotFound();
});

test('a catalog manager can upload a product image', function () {
    Storage::fake(config('filesystems.default'));

    $product = Product::factory()->create();

    $response = $this->actingAs($this->admin)->post("/api/v1/admin/products/{$product->id}/images", [
        'image' => UploadedFile::fake()->image('cover.jpg'),
        'alt' => 'Front view',
    ]);

    $response->assertCreated()->assertJsonPath('alt', 'Front view');
    $this->assertDatabaseCount('product_images', 1);
});

test('uploading a non-image file is rejected', function () {
    Storage::fake(config('filesystems.default'));

    $product = Product::factory()->create();

    $response = $this->actingAs($this->admin)->post("/api/v1/admin/products/{$product->id}/images", [
        'image' => UploadedFile::fake()->create('document.pdf', 100),
    ], ['Accept' => 'application/json']);

    $response->assertUnprocessable()->assertJsonValidationErrors('image');
});

test('a restricted role cannot manage products', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $this->actingAs($marketer)->getJson('/api/v1/admin/products')->assertForbidden();
});
