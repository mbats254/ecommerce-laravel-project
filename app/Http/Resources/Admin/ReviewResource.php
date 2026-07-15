<?php

namespace App\Http\Resources\Admin;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Review */
class ReviewResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Review $review */
        $review = $this->resource;

        return [
            'id' => $review->id,
            'product' => [
                'id' => $review->product->id,
                'name' => $review->product->name,
                'slug' => $review->product->slug,
            ],
            'user' => [
                'id' => $review->user->id,
                'name' => $review->user->name,
            ],
            'rating' => $review->rating,
            'title' => $review->title,
            'body' => $review->body,
            'status' => $review->status,
            'createdAt' => $review->created_at->toIso8601String(),
        ];
    }
}
