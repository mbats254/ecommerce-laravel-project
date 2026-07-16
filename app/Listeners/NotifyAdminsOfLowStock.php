<?php

namespace App\Listeners;

use App\Events\StockLevelLow;
use App\Models\User;
use App\Notifications\LowStockAlertNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Permission;

class NotifyAdminsOfLowStock implements ShouldQueue
{
    public function handle(StockLevelLow $event): void
    {
        // Guards against environments where permissions haven't been seeded
        // yet — spatie's permission scope throws PermissionDoesNotExist
        // otherwise, and this is a queued side effect that must never be
        // able to fail the request that triggered it.
        if (! Permission::query()->where('name', 'products.manage')->exists()) {
            return;
        }

        $admins = User::query()->permission('products.manage')->get();

        Notification::send($admins, new LowStockAlertNotification($event->product));
    }
}
