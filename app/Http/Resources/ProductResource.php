<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product */
class ProductResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Product $product */
        $product = $this->resource;

        return [
            'id' => $product->id,
            'name' => $product->name,
            'slug' => $product->slug,
            'sku' => $product->sku,
            'shortDescription' => $product->short_description,
            'description' => $product->description,
            'price' => (float) $product->price,
            'compareAtPrice' => $product->compare_at_price !== null ? (float) $product->compare_at_price : null,
            'stockStatus' => $product->stock_status,
            'isFeatured' => $product->is_featured,
            'isFlashDeal' => $product->is_flash_deal,
            'flashDealEndsAt' => $product->flash_deal_ends_at?->toIso8601String(),
            'category' => [
                'id' => $product->category->id,
                'name' => $product->category->name,
                'slug' => $product->category->slug,
            ],
            'brand' => [
                'id' => $product->brand->id,
                'name' => $product->brand->name,
                'slug' => $product->brand->slug,
            ],
            'images' => ProductImageResource::collection($this->whenLoaded('images')),
            'specifications' => ProductSpecificationResource::collection($this->whenLoaded('specifications')),
            'metaTitle' => $product->meta_title,
            'metaDescription' => $product->meta_description,
            'createdAt' => $product->created_at->toIso8601String(),
        ];
    }
}
