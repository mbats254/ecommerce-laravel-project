<?php

use App\Models\InventoryItem;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('the low stock scope only returns items at or below their threshold', function () {
    $low = InventoryItem::factory()->create(['quantity' => 5, 'low_stock_threshold' => 5]);
    InventoryItem::factory()->create(['quantity' => 100, 'low_stock_threshold' => 5]);

    $results = InventoryItem::query()->lowStock()->get();

    expect($results)->toHaveCount(1)
        ->and($results->first()->id)->toBe($low->id);
});

test('the low stock scope is a no-op when explicitly disabled', function () {
    InventoryItem::factory()->create(['quantity' => 5, 'low_stock_threshold' => 5]);
    InventoryItem::factory()->create(['quantity' => 100, 'low_stock_threshold' => 5]);

    expect(InventoryItem::query()->lowStock(false)->count())->toBe(2);
});

test('the low stock scope accepts common truthy and falsy string representations', function () {
    InventoryItem::factory()->create(['quantity' => 5, 'low_stock_threshold' => 5]);
    InventoryItem::factory()->create(['quantity' => 100, 'low_stock_threshold' => 5]);

    expect(InventoryItem::query()->lowStock('1')->count())->toBe(1)
        ->and(InventoryItem::query()->lowStock('0')->count())->toBe(2);
});
