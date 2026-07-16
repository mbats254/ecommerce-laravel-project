<?php

namespace App\Http\Resources;

use App\Models\ReturnRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ReturnRequest */
class ReturnResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var ReturnRequest $return */
        $return = $this->resource;

        return [
            'id' => $return->id,
            'orderItem' => [
                'id' => $return->orderItem->id,
                'productName' => $return->orderItem->product_name,
                'sku' => $return->orderItem->sku,
            ],
            'reason' => $return->reason,
            'status' => $return->status,
            'requestedAt' => $return->requested_at->toIso8601String(),
        ];
    }
}
