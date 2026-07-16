<?php

namespace App\Actions\Marketing;

use App\Models\Coupon;

class CreateCouponAction
{
    /**
     * @param  array{code: string, type: string, value: float, usage_limit?: ?int, starts_at?: ?string, expires_at?: ?string, is_active?: bool}  $data
     */
    public function handle(array $data): Coupon
    {
        $coupon = Coupon::create($data);

        // Refreshed so DB-level column defaults for attributes not present
        // in $data (used_count, is_active) are reflected in the returned
        // instance, not left null in memory.
        return $coupon->refresh();
    }
}
