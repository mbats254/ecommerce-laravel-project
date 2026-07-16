<?php

namespace App\Notifications;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(private readonly Order $order) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Order Confirmation — {$this->order->order_number}")
            ->greeting("Thanks for your order, {$notifiable->name}!")
            ->line("Your order {$this->order->order_number} has been placed successfully.")
            ->line('Total: KES '.number_format((float) $this->order->total, 2))
            ->line('We will notify you as your order progresses.');
    }
}
