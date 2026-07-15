<?php

namespace App\Http\Resources;

use App\Models\ProductSpecification;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ProductSpecification */
class ProductSpecificationResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var ProductSpecification $specification */
        $specification = $this->resource;

        return [
            'group' => $specification->group,
            'label' => $specification->label,
            'value' => $specification->value,
            'position' => $specification->position,
        ];
    }
}
