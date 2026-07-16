<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Order\TransitionOrderStatusAction;
use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateOrderStatusRequest;
use App\Http\Resources\Admin\OrderCollection;
use App\Http\Resources\Admin\OrderResource;
use App\Models\Order;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class OrderController extends Controller
{
    public function index(Request $request): OrderCollection
    {
        $this->authorize('orders.manage');

        FlatQueryFilters::merge($request, ['status', 'paymentMethod']);

        $orders = QueryBuilder::for(Order::query())
            ->allowedFilters('status', AllowedFilter::exact('paymentMethod', 'payment_method'))
            ->allowedSorts('placed_at', 'total', 'created_at')
            ->defaultSort('-placed_at')
            ->with(['user', 'items', 'shippingAddress'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new OrderCollection($orders);
    }

    public function show(Order $order): OrderResource
    {
        $this->authorize('orders.manage');

        return new OrderResource($order->load(['user', 'items', 'shippingAddress', 'statusHistory']));
    }

    public function updateStatus(UpdateOrderStatusRequest $request, Order $order, TransitionOrderStatusAction $action): OrderResource
    {
        $status = OrderStatus::from($request->validated('status'));

        $order = $action->handle($order, $status, $request->validated('note'));

        return new OrderResource($order->load(['user', 'items', 'shippingAddress', 'statusHistory']));
    }
}
