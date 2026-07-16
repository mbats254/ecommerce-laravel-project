<?php

namespace App\Http\Controllers;

use App\Actions\Marketing\ValidateCouponAction;
use App\Http\Requests\ValidateCouponRequest;
use Illuminate\Http\JsonResponse;

class CouponController extends Controller
{
    public function validateCoupon(ValidateCouponRequest $request, ValidateCouponAction $action): JsonResponse
    {
        $result = $action->handle(
            $request->validated('code'),
            (float) $request->validated('cartTotal'),
        );

        return response()->json([
            'code' => $result['coupon']->code,
            'discount' => $result['discount'],
        ]);
    }
}
