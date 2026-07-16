<?php

namespace App\Http\Resources;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Banner */
class BannerResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Banner $banner */
        $banner = $this->resource;

        return [
            'id' => $banner->id,
            'title' => $banner->title,
            'imagePath' => $banner->image_path,
            'linkUrl' => $banner->link_url,
            'position' => $banner->position,
            'startsAt' => $banner->starts_at?->toIso8601String(),
            'expiresAt' => $banner->expires_at?->toIso8601String(),
            'isActive' => $banner->is_active,
            'createdAt' => $banner->created_at->toIso8601String(),
        ];
    }
}
