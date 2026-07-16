<?php

namespace App\Http\Resources;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin CartItem */
class CartItemResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var CartItem $item */
        $item = $this->resource;

        return [
            'id' => $item->id,
            'product' => [
                'id' => $item->product->id,
                'name' => $item->product->name,
                'slug' => $item->product->slug,
            ],
            'variantId' => $item->variant_id,
            'quantity' => $item->quantity,
            'unitPrice' => (float) $item->unit_price,
            'lineTotal' => (float) $item->unit_price * $item->quantity,
        ];
    }
}
