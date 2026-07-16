<?php

namespace App\Http\Controllers;

use App\Actions\Returns\RequestReturnAction;
use App\Http\Requests\StoreReturnRequest;
use App\Http\Resources\ReturnResource;
use App\Models\Order;

class ReturnController extends Controller
{
    public function store(StoreReturnRequest $request, string $orderNumber, RequestReturnAction $action): ReturnResource
    {
        $order = Order::query()->where('order_number', $orderNumber)->firstOrFail();

        $return = $action->handle($order, $request->validated());

        return new ReturnResource($return->load('orderItem'));
    }
}
