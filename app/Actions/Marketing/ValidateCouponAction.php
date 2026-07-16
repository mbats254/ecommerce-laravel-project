<?php

namespace App\Actions\Marketing;

use App\Enums\CouponType;
use App\Models\Coupon;
use Illuminate\Validation\ValidationException;

/**
 * The single place a coupon is checked and priced. Reused verbatim by the
 * storefront's /coupons/validate preview and by PlaceOrderAction at
 * checkout — one implementation, two call sites, impossible to disagree.
 */
class ValidateCouponAction
{
    /**
     * @return array{coupon: Coupon, discount: float}
     */
    public function handle(string $code, float $cartTotal): array
    {
        $coupon = Coupon::query()->where('code', $code)->first();

        if ($coupon === null || ! $coupon->is_active) {
            throw ValidationException::withMessages([
                'code' => ['This coupon code is not valid.'],
            ]);
        }

        if ($coupon->starts_at !== null && $coupon->starts_at->isFuture()) {
            throw ValidationException::withMessages([
                'code' => ['This coupon is not active yet.'],
            ]);
        }

        if ($coupon->expires_at !== null && $coupon->expires_at->isPast()) {
            throw ValidationException::withMessages([
                'code' => ['This coupon has expired.'],
            ]);
        }

        if ($coupon->usage_limit !== null && $coupon->used_count >= $coupon->usage_limit) {
            throw ValidationException::withMessages([
                'code' => ['This coupon has reached its usage limit.'],
            ]);
        }

        $discount = $coupon->type === CouponType::Percentage
            ? round($cartTotal * ((float) $coupon->value / 100), 2)
            : min((float) $coupon->value, $cartTotal);

        return ['coupon' => $coupon, 'discount' => $discount];
    }
}
