<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Collection;

class SalesReportNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @param  'daily'|'weekly'  $period
     * @param  Collection<int, \stdClass>  $rows  Per-day rows from ReportsService::sales() — date, total, orders.
     */
    public function __construct(
        private readonly string $period,
        private readonly string $startDate,
        private readonly string $endDate,
        private readonly Collection $rows,
    ) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $totalSales = $this->rows->sum(fn ($row) => (float) $row->total);
        $totalOrders = $this->rows->sum(fn ($row) => (int) $row->orders);
        $label = $this->period === 'daily' ? 'Daily' : 'Weekly';

        $message = (new MailMessage)
            ->subject("{$label} sales report: {$this->startDate} to {$this->endDate}")
            ->greeting("{$label} sales report")
            ->line("Period: {$this->startDate} to {$this->endDate}")
            ->line("Total sales: KES {$this->formatMoney($totalSales)}")
            ->line("Total orders: {$totalOrders}");

        foreach ($this->rows as $row) {
            $message->line("{$row->date}: KES {$this->formatMoney((float) $row->total)} across {$row->orders} order(s)");
        }

        return $message;
    }

    private function formatMoney(float $amount): string
    {
        return number_format($amount, 2);
    }
}
