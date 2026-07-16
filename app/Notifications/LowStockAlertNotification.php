<?php

namespace App\Notifications;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LowStockAlertNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(private readonly Product $product) {}

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
            ->subject("Low stock: {$this->product->name}")
            ->line("{$this->product->name} ({$this->product->sku}) is now {$this->product->stock_status->value}.")
            ->line('Please review inventory levels.');
    }
}
