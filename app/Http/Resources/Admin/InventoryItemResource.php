<?php

namespace App\Http\Resources\Admin;

use App\Models\InventoryItem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin InventoryItem */
class InventoryItemResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var InventoryItem $item */
        $item = $this->resource;

        return [
            'id' => $item->id,
            'product' => [
                'id' => $item->product->id,
                'name' => $item->product->name,
                'sku' => $item->product->sku,
            ],
            'warehouse' => [
                'id' => $item->warehouse->id,
                'name' => $item->warehouse->name,
            ],
            'quantity' => $item->quantity,
            'lowStockThreshold' => $item->low_stock_threshold,
            'isLowStock' => $item->quantity <= $item->low_stock_threshold,
        ];
    }
}
