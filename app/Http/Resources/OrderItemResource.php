<?php

namespace App\Http\Resources;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin OrderItem */
class OrderItemResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var OrderItem $item */
        $item = $this->resource;

        return [
            'id' => $item->id,
            'productId' => $item->product_id,
            'productName' => $item->product_name,
            'sku' => $item->sku,
            'quantity' => $item->quantity,
            'unitPrice' => (float) $item->unit_price,
            'total' => (float) $item->total,
        ];
    }
}
