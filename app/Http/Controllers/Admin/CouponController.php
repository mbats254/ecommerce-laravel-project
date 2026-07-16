<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Marketing\CreateCouponAction;
use App\Actions\Marketing\UpdateCouponAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCouponRequest;
use App\Http\Requests\Admin\UpdateCouponRequest;
use App\Http\Resources\Admin\CouponCollection;
use App\Http\Resources\Admin\CouponResource;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\QueryBuilder\QueryBuilder;

class CouponController extends Controller
{
    public function index(Request $request): CouponCollection
    {
        $this->authorize('marketing.manage');

        $coupons = QueryBuilder::for(Coupon::query())
            ->allowedSorts('code', 'created_at')
            ->defaultSort('-created_at')
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new CouponCollection($coupons);
    }

    public function store(StoreCouponRequest $request, CreateCouponAction $action): CouponResource
    {
        return new CouponResource($action->handle($request->validated()));
    }

    public function update(UpdateCouponRequest $request, Coupon $coupon, UpdateCouponAction $action): CouponResource
    {
        return new CouponResource($action->handle($coupon, $request->validated()));
    }

    public function destroy(Coupon $coupon): Response
    {
        $this->authorize('marketing.manage');

        $coupon->delete();

        return response()->noContent();
    }
}
