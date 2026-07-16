<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use App\Models\Setting;
use App\Notifications\OrderConfirmationNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOrderConfirmationNotification implements ShouldQueue
{
    public function handle(OrderPlaced $event): void
    {
        if (! Setting::current()->email_on_new_order) {
            return;
        }

        $event->order->user->notify(new OrderConfirmationNotification($event->order));
    }
}
