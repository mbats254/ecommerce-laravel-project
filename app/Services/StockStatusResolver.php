<?php

namespace App\Services;

use App\Enums\StockStatus;
use App\Models\Product;

/**
 * The single formula for turning raw inventory rows into the stock_status
 * a customer or admin sees. Used by both ProductResource (storefront) and
 * the admin Inventory endpoint (Phase 5) so there is exactly one place that
 * decides what "low stock" means.
 */
class StockStatusResolver
{
    public function resolve(Product $product): StockStatus
    {
        // Explicit loadMissing (not a bare relation access) so this stays safe
        // under Model::preventLazyLoading — callers that already eager-loaded
        // inventoryItems (every list/show endpoint should) pay no extra query.
        $product->loadMissing('inventoryItems');

        $totalQuantity = (int) $product->inventoryItems->sum('quantity');

        if ($totalQuantity <= 0) {
            return StockStatus::OutOfStock;
        }

        $totalThreshold = (int) $product->inventoryItems->sum('low_stock_threshold');

        if ($totalQuantity <= $totalThreshold) {
            return StockStatus::LowStock;
        }

        return StockStatus::InStock;
    }
}
