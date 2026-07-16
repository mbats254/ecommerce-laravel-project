<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\AddressResource;
use App\Http\Resources\OrderItemResource;
use App\Http\Resources\OrderStatusHistoryResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Order */
class OrderResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Order $order */
        $order = $this->resource;

        return [
            'id' => $order->id,
            'orderNumber' => $order->order_number,
            'status' => $order->status,
            'subtotal' => (float) $order->subtotal,
            'deliveryFee' => (float) $order->delivery_fee,
            'vat' => (float) $order->vat,
            'total' => (float) $order->total,
            'paymentMethod' => $order->payment_method,
            'customer' => [
                'id' => $order->user->id,
                'name' => $order->user->name,
                'email' => $order->user->email,
            ],
            'shippingAddress' => new AddressResource($this->whenLoaded('shippingAddress')),
            'items' => OrderItemResource::collection($this->whenLoaded('items')),
            'timeline' => OrderStatusHistoryResource::collection($this->whenLoaded('statusHistory')),
            'placedAt' => $order->placed_at->toIso8601String(),
            'createdAt' => $order->created_at->toIso8601String(),
        ];
    }
}
