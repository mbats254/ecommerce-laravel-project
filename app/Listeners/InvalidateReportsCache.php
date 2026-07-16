<?php

namespace App\Listeners;

use App\Services\ReportsService;

class InvalidateReportsCache
{
    public function __construct(private readonly ReportsService $reports) {}

    public function handle(): void
    {
        $this->reports->flushDashboard();
    }
}
