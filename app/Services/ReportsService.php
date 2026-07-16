<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Aggregation queries are expensive at scale, so the dashboard summary is
 * cached short-TTL and explicitly invalidated by the relevant model events
 * (new order, new customer) — mirroring the frontend's own React Query
 * caching tiers so a cache miss on either side is still fast.
 */
class ReportsService
{
    public const DASHBOARD_CACHE_KEY = 'admin.reports.summary';

    private const CACHE_TTL_MINUTES = 2;

    /**
     * @return array<string, mixed>
     */
    public function dashboard(): array
    {
        return Cache::remember(self::DASHBOARD_CACHE_KEY, now()->addMinutes(self::CACHE_TTL_MINUTES), function () {
            return [
                'totalSales' => (float) Order::query()
                    ->where('status', '!=', OrderStatus::Cancelled)
                    ->sum('total'),
                'totalOrders' => Order::query()->count(),
                'totalCustomers' => User::query()->whereDoesntHave('roles')->count(),
                'ordersByStatus' => Order::query()
                    ->select('status', DB::raw('count(*) as count'))
                    ->groupBy('status')
                    ->toBase()
                    ->get()
                    ->mapWithKeys(fn ($row) => [$row->status => $row->count]),
            ];
        });
    }

    /**
     * @return Collection<int, \stdClass>
     */
    public function sales(?string $startDate, ?string $endDate): Collection
    {
        $cacheKey = "admin.reports.sales.{$startDate}.{$endDate}";

        return Cache::remember($cacheKey, now()->addMinutes(self::CACHE_TTL_MINUTES), fn () => Order::query()
            ->when($startDate, fn ($q) => $q->whereDate('placed_at', '>=', $startDate))
            ->when($endDate, fn ($q) => $q->whereDate('placed_at', '<=', $endDate))
            ->selectRaw('DATE(placed_at) as date, SUM(total) as total, COUNT(*) as orders')
            ->groupBy('date')
            ->orderBy('date')
            ->toBase()
            ->get());
    }

    /**
     * @return Collection<int, \stdClass>
     */
    public function products(?string $startDate, ?string $endDate): Collection
    {
        $cacheKey = "admin.reports.products.{$startDate}.{$endDate}";

        return Cache::remember($cacheKey, now()->addMinutes(self::CACHE_TTL_MINUTES), fn () => OrderItem::query()
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->when($startDate, fn ($q) => $q->whereDate('orders.placed_at', '>=', $startDate))
            ->when($endDate, fn ($q) => $q->whereDate('orders.placed_at', '<=', $endDate))
            ->selectRaw('order_items.product_id, order_items.product_name, SUM(order_items.quantity) as units_sold, SUM(order_items.total) as revenue')
            ->groupBy('order_items.product_id', 'order_items.product_name')
            ->orderByDesc('revenue')
            ->limit(20)
            ->toBase()
            ->get());
    }

    /**
     * @return Collection<int, \stdClass>
     */
    public function customers(): Collection
    {
        return Cache::remember('admin.reports.customers', now()->addMinutes(self::CACHE_TTL_MINUTES), fn () => Order::query()
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->selectRaw('orders.user_id, users.name, users.email, COUNT(*) as orders_count, SUM(orders.total) as total_spent')
            ->groupBy('orders.user_id', 'users.name', 'users.email')
            ->orderByDesc('total_spent')
            ->limit(20)
            ->toBase()
            ->get());
    }

    public function flushDashboard(): void
    {
        Cache::forget(self::DASHBOARD_CACHE_KEY);
    }
}
