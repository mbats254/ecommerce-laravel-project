<?php

namespace App\Listeners;

use App\Events\OrderStatusChanged;
use App\Notifications\OrderStatusChangedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Sends unconditionally for now. The plan gates this on the customer's
 * notification preferences and the admin Settings toggles (emailOnNewOrder,
 * smsOnOrderShipped) — neither exists yet (Settings is Phase 6). Revisit
 * once that lands.
 */
class SendOrderStatusChangedNotification implements ShouldQueue
{
    public function handle(OrderStatusChanged $event): void
    {
        $event->order->user->notify(new OrderStatusChangedNotification($event->order));
    }
}
