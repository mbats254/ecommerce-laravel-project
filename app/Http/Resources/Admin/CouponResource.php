<?php

namespace App\Http\Resources\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Coupon */
class CouponResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Coupon $coupon */
        $coupon = $this->resource;

        return [
            'id' => $coupon->id,
            'code' => $coupon->code,
            'type' => $coupon->type,
            'value' => (float) $coupon->value,
            'usageLimit' => $coupon->usage_limit,
            'usedCount' => $coupon->used_count,
            'startsAt' => $coupon->starts_at?->toIso8601String(),
            'expiresAt' => $coupon->expires_at?->toIso8601String(),
            'isActive' => $coupon->is_active,
            'createdAt' => $coupon->created_at->toIso8601String(),
        ];
    }
}
