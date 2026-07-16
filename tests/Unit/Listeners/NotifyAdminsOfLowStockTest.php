<?php

use App\Events\StockLevelLow;
use App\Listeners\NotifyAdminsOfLowStock;
use App\Models\Product;
use App\Models\User;
use App\Notifications\LowStockAlertNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Permission;

uses(RefreshDatabase::class);

test('nothing is sent when the products.manage permission has never been seeded', function () {
    Notification::fake();
    $product = Product::factory()->create();

    (new NotifyAdminsOfLowStock)->handle(new StockLevelLow($product));

    Notification::assertNothingSent();
});

test('every user holding products.manage is notified once the permission exists', function () {
    Notification::fake();
    Permission::findOrCreate('products.manage');

    $admin = User::factory()->create();
    $admin->givePermissionTo('products.manage');
    $bystander = User::factory()->create();

    $product = Product::factory()->create();

    (new NotifyAdminsOfLowStock)->handle(new StockLevelLow($product));

    Notification::assertSentTo($admin, LowStockAlertNotification::class);
    Notification::assertNotSentTo($bystander, LowStockAlertNotification::class);
});
