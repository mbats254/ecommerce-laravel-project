<?php

namespace App\Http\Resources;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

/** @mixin ProductImage */
class ProductImageResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var ProductImage $image */
        $image = $this->resource;

        return [
            'id' => $image->id,
            'url' => Storage::disk(config('filesystems.default'))->url($image->path),
            'alt' => $image->alt,
            'position' => $image->position,
        ];
    }
}
