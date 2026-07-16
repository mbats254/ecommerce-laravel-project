<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redis;
use Throwable;

/**
 * Distinct from Laravel's own `/up` (bootstrap/app.php) — that one only proves
 * the app booted. This one is what the load balancer polls to decide whether
 * an instance can actually serve traffic, so it checks the dependencies a
 * request would actually touch.
 */
class HealthController extends Controller
{
    public function index(): JsonResponse
    {
        $checks = [
            'database' => $this->check(fn () => DB::connection()->getPdo()),
            'redis' => $this->check(fn () => Redis::connection()->ping()),
            'queue' => $this->check(fn () => Queue::connection()->size()),
        ];

        $healthy = ! in_array(false, $checks, strict: true);

        return response()->json([
            'status' => $healthy ? 'ok' : 'error',
            'checks' => $checks,
        ], $healthy ? 200 : 503);
    }

    private function check(callable $probe): bool
    {
        try {
            $probe();

            return true;
        } catch (Throwable) {
            return false;
        }
    }
}
