<?php

use App\Models\InventoryItem;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

pest()->extend(TestCase::class)
    ->use(RefreshDatabase::class)
    ->in('Feature');

pest()->extend(TestCase::class)
    ->in('Unit');

/**
 * Creates an active product with enough inventory to be added to a cart.
 */
function createInStockProduct(array $productAttributes = [], int $quantity = 20): Product
{
    $product = Product::factory()->create($productAttributes);
    InventoryItem::factory()->for($product)->create(['quantity' => $quantity]);

    return $product;
}
