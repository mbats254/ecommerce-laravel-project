<?php

use App\Enums\StockStatus;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Services\StockStatusResolver;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a product with no inventory rows is out of stock', function () {
    $product = Product::factory()->create();

    expect((new StockStatusResolver)->resolve($product))->toBe(StockStatus::OutOfStock);
});

test('a product with zero total quantity is out of stock', function () {
    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->outOfStock()->create();

    expect((new StockStatusResolver)->resolve($product))->toBe(StockStatus::OutOfStock);
});

test('a product at or below its threshold is low stock', function () {
    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->lowStock()->create();

    expect((new StockStatusResolver)->resolve($product))->toBe(StockStatus::LowStock);
});

test('a product comfortably above its threshold is in stock', function () {
    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->create(['quantity' => 100, 'low_stock_threshold' => 5]);

    expect((new StockStatusResolver)->resolve($product))->toBe(StockStatus::InStock);
});

test('quantities and thresholds are summed across multiple warehouses', function () {
    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->create(['quantity' => 3, 'low_stock_threshold' => 5]);
    InventoryItem::factory()->for($product)->create(['quantity' => 2, 'low_stock_threshold' => 5]);

    // total quantity 5 <= total threshold 10 -> low stock
    expect((new StockStatusResolver)->resolve($product))->toBe(StockStatus::LowStock);
});
