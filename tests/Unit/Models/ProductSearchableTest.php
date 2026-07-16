<?php

use App\Enums\ProductStatus;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\ProductSpecification;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('an active product should be searchable', function () {
    $product = Product::factory()->create(['status' => ProductStatus::Active]);

    expect($product->shouldBeSearchable())->toBeTrue();
});

test('draft and archived products should not be searchable', function () {
    $draft = Product::factory()->draft()->create();
    $archived = Product::factory()->create(['status' => ProductStatus::Archived]);

    expect($draft->shouldBeSearchable())->toBeFalse()
        ->and($archived->shouldBeSearchable())->toBeFalse();
});

test('the searchable array exposes the fields search filters and ranking rely on', function () {
    $product = Product::factory()->create(['name' => 'Dell XPS 13', 'sku' => 'DELL-XPS-13']);
    ProductSpecification::factory()->for($product)->create(['value' => 'Intel Core i7']);
    InventoryItem::factory()->for($product)->create(['quantity' => 50, 'low_stock_threshold' => 5]);

    $searchable = $product->toSearchableArray();

    expect($searchable['name'])->toBe('Dell XPS 13')
        ->and($searchable['sku'])->toBe('DELL-XPS-13')
        ->and($searchable['brand'])->toBe($product->brand->name)
        ->and($searchable['category'])->toBe($product->category->name)
        ->and($searchable['specifications'])->toContain('Intel Core i7')
        ->and($searchable['stock_status'])->toBe('in_stock');
});
