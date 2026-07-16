<?php

namespace App\Http\Resources\Admin;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Warehouse */
class WarehouseResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Warehouse $warehouse */
        $warehouse = $this->resource;

        return [
            'id' => $warehouse->id,
            'name' => $warehouse->name,
            'location' => $warehouse->location,
            'manager' => $warehouse->manager,
            'isActive' => $warehouse->is_active,
            'createdAt' => $warehouse->created_at->toIso8601String(),
        ];
    }
}
