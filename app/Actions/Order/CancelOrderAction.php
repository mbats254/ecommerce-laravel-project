<?php

namespace App\Actions\Order;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Validation\ValidationException;

class CancelOrderAction
{
    /**
     * Orders can only be cancelled by the customer before they've shipped.
     * Once packing/shipped/delivered, only the admin-driven status state
     * machine (TransitionOrderStatusAction) governs further transitions.
     */
    private const CANCELLABLE_STATUSES = [OrderStatus::Pending, OrderStatus::Processing];

    public function __construct(
        private readonly TransitionOrderStatusAction $transitionOrderStatus,
    ) {}

    public function handle(Order $order): Order
    {
        if (! in_array($order->status, self::CANCELLABLE_STATUSES, true)) {
            throw ValidationException::withMessages([
                'order' => ['This order can no longer be cancelled.'],
            ]);
        }

        return $this->transitionOrderStatus->handle($order, OrderStatus::Cancelled, 'Cancelled by customer.');
    }
}
