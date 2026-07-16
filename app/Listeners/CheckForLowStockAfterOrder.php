<?php

namespace App\Listeners;

use App\Enums\StockStatus;
use App\Events\OrderPlaced;
use App\Events\StockLevelLow;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckForLowStockAfterOrder implements ShouldQueue
{
    public function handle(OrderPlaced $event): void
    {
        foreach ($event->order->items as $item) {
            $product = $item->product;

            if (in_array($product->stock_status, [StockStatus::LowStock, StockStatus::OutOfStock], true)) {
                StockLevelLow::dispatch($product);
            }
        }
    }
}
