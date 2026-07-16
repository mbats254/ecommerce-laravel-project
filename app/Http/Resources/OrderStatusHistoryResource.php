<?php

namespace App\Http\Resources;

use App\Models\OrderStatusHistory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin OrderStatusHistory */
class OrderStatusHistoryResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var OrderStatusHistory $entry */
        $entry = $this->resource;

        return [
            'status' => $entry->status,
            'note' => $entry->note,
            'occurredAt' => $entry->occurred_at->toIso8601String(),
        ];
    }
}
