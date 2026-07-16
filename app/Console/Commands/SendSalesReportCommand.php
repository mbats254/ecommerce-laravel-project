<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\SalesReportNotification;
use App\Services\ReportsService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Spatie\Permission\Models\Role;

class SendSalesReportCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'app:send-sales-report {--period=daily : daily or weekly}';

    /**
     * @var string
     */
    protected $description = 'Emails a sales report to Administrators — today\'s sales for --period=daily, the trailing 7 days for --period=weekly.';

    public function handle(ReportsService $reports): int
    {
        $period = $this->option('period');

        if (! in_array($period, ['daily', 'weekly'], strict: true)) {
            $this->error('--period must be "daily" or "weekly".');

            return self::FAILURE;
        }

        // Guards against environments where roles haven't been seeded yet —
        // spatie's role scope throws RoleDoesNotExist otherwise, and this is
        // a scheduled job that must never crash the scheduler run.
        if (! Role::query()->where('name', 'Administrator')->exists()) {
            $this->warn('Administrator role does not exist yet — skipping.');

            return self::SUCCESS;
        }

        $startDate = $period === 'daily' ? now()->toDateString() : now()->subDays(6)->toDateString();
        $endDate = now()->toDateString();

        $rows = $reports->sales($startDate, $endDate);

        $administrators = User::query()->role('Administrator')->get();

        if ($administrators->isEmpty()) {
            $this->warn('No Administrator users found — skipping.');

            return self::SUCCESS;
        }

        Notification::send($administrators, new SalesReportNotification($period, $startDate, $endDate, $rows));

        $this->info("Sent {$period} sales report ({$startDate} to {$endDate}) to {$administrators->count()} administrator(s).");

        return self::SUCCESS;
    }
}
