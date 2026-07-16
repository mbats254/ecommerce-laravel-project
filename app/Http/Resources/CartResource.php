<?php

namespace App\Http\Resources;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Cart */
class CartResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Cart $cart */
        $cart = $this->resource;

        return [
            'id' => $cart->id,
            'items' => CartItemResource::collection($this->whenLoaded('items')),
            'subtotal' => (float) $cart->items->sum(fn ($item) => $item->unit_price * $item->quantity),
        ];
    }
}
