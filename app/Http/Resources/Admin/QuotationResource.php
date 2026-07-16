<?php

namespace App\Http\Resources\Admin;

use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Quotation */
class QuotationResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Quotation $quotation */
        $quotation = $this->resource;

        return [
            'id' => $quotation->id,
            'leadId' => $quotation->lead_id,
            'customer' => $quotation->customer_id === null ? null : [
                'id' => $quotation->customer->id,
                'name' => $quotation->customer->name,
                'email' => $quotation->customer->email,
            ],
            'status' => $quotation->status,
            'total' => (float) $quotation->total,
            'validUntil' => $quotation->valid_until?->toDateString(),
            'items' => QuotationItemResource::collection($this->whenLoaded('items')),
            'createdAt' => $quotation->created_at->toIso8601String(),
        ];
    }
}
