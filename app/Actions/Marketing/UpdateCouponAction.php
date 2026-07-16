<?php

namespace App\Actions\Marketing;

use App\Models\Coupon;

class UpdateCouponAction
{
    /**
     * @param  array{code?: string, type?: string, value?: float, usage_limit?: ?int, starts_at?: ?string, expires_at?: ?string, is_active?: bool}  $data
     */
    public function handle(Coupon $coupon, array $data): Coupon
    {
        $coupon->update($data);

        return $coupon->refresh();
    }
}
