<?php

use App\Models\Order;
use App\Models\User;
use App\Notifications\SalesReportNotification;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Notification;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
});

test('the daily sales report is emailed to every administrator', function () {
    Notification::fake();

    $admin = User::factory()->create();
    $admin->assignRole('Administrator');
    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    Order::factory()->create(['total' => 5000, 'placed_at' => now()]);

    $this->artisan('app:send-sales-report', ['--period' => 'daily'])->assertSuccessful();

    Notification::assertSentTo($admin, SalesReportNotification::class);
    Notification::assertNotSentTo($catalogManager, SalesReportNotification::class);
});

test('the weekly sales report covers the trailing 7 days', function () {
    Notification::fake();

    $admin = User::factory()->create();
    $admin->assignRole('Administrator');

    Order::factory()->create(['total' => 1000, 'placed_at' => now()->subDays(3)]);
    Order::factory()->create(['total' => 2000, 'placed_at' => now()->subDays(10)]);

    $this->artisan('app:send-sales-report', ['--period' => 'weekly'])->assertSuccessful();

    Notification::assertSentTo(
        $admin,
        SalesReportNotification::class,
        function (SalesReportNotification $notification) use ($admin) {
            $lines = implode(' ', $notification->toMail($admin)->introLines);

            return str_contains($lines, 'KES 1,000.00')
                && ! str_contains($lines, 'KES 2,000.00');
        }
    );
});

test('an invalid period is rejected', function () {
    $this->artisan('app:send-sales-report', ['--period' => 'monthly'])->assertFailed();
});

test('nothing is sent when there are no administrators', function () {
    Notification::fake();

    Order::factory()->create(['total' => 5000, 'placed_at' => now()]);

    $this->artisan('app:send-sales-report', ['--period' => 'daily'])->assertSuccessful();

    Notification::assertNothingSent();
});
