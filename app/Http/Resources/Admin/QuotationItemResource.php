<?php

namespace App\Http\Resources\Admin;

use App\Models\QuotationItem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin QuotationItem */
class QuotationItemResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var QuotationItem $item */
        $item = $this->resource;

        return [
            'id' => $item->id,
            'product' => [
                'id' => $item->product->id,
                'name' => $item->product->name,
                'sku' => $item->product->sku,
            ],
            'quantity' => $item->quantity,
            'unitPrice' => (float) $item->unit_price,
            'total' => (float) $item->unit_price * $item->quantity,
        ];
    }
}
