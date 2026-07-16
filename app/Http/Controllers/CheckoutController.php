<?php

namespace App\Http\Controllers;

use App\Actions\Checkout\PlaceOrderAction;
use App\Http\Requests\CheckoutRequest;
use App\Http\Resources\OrderResource;
use App\Services\CartResolver;

class CheckoutController extends Controller
{
    public function store(CheckoutRequest $request, CartResolver $cartResolver, PlaceOrderAction $action): OrderResource
    {
        $cart = $cartResolver->resolve($request);

        $order = $action->handle($request->user(), $cart, $request->validated());

        return new OrderResource($order);
    }
}
