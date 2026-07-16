<?php

namespace App\Actions\Returns;

use App\Enums\OrderStatus;
use App\Enums\ReturnStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ReturnRequest;
use Illuminate\Validation\ValidationException;

class RequestReturnAction
{
    /**
     * @param  array{orderItemId: string, reason: string}  $data
     */
    public function handle(Order $order, array $data): ReturnRequest
    {
        if ($order->status !== OrderStatus::Delivered) {
            throw ValidationException::withMessages([
                'orderItemId' => ['Only delivered orders can be returned.'],
            ]);
        }

        $orderItem = OrderItem::query()
            ->where('order_id', $order->id)
            ->find($data['orderItemId']);

        if ($orderItem === null) {
            throw ValidationException::withMessages([
                'orderItemId' => ['This item does not belong to the order.'],
            ]);
        }

        if (ReturnRequest::query()->where('order_item_id', $orderItem->id)->exists()) {
            throw ValidationException::withMessages([
                'orderItemId' => ['A return has already been requested for this item.'],
            ]);
        }

        return ReturnRequest::create([
            'order_id' => $order->id,
            'order_item_id' => $orderItem->id,
            'reason' => $data['reason'],
            'status' => ReturnStatus::Requested,
            'requested_at' => now(),
        ]);
    }
}
