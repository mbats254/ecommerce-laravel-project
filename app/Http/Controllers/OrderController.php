<?php

namespace App\Http\Controllers;

use App\Actions\Order\CancelOrderAction;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request): OrderCollection
    {
        $orders = $request->user()
            ->orders()
            ->with(['items', 'shippingAddress'])
            ->latest('placed_at')
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new OrderCollection($orders);
    }

    public function show(Request $request, string $orderNumber): OrderResource
    {
        $order = Order::query()->where('order_number', $orderNumber)->firstOrFail();

        $this->authorize('view', $order);

        return new OrderResource($order->load(['items', 'shippingAddress', 'statusHistory']));
    }

    public function cancel(Request $request, string $orderNumber, CancelOrderAction $action): OrderResource
    {
        $order = Order::query()->where('order_number', $orderNumber)->firstOrFail();

        $this->authorize('cancel', $order);

        return new OrderResource($action->handle($order)->load(['items', 'shippingAddress', 'statusHistory']));
    }
}
