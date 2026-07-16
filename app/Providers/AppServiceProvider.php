<?php

namespace App\Providers;

use App\Events\OrderPlaced;
use App\Events\OrderStatusChanged;
use App\Events\StockLevelLow;
use App\Listeners\CheckForLowStockAfterOrder;
use App\Listeners\InvalidateReportsCache;
use App\Listeners\NotifyAdminsOfLowStock;
use App\Listeners\SendOrderConfirmationNotification;
use App\Listeners\SendOrderStatusChangedNotification;
use App\Payments\PaymentGatewayManager;
use Illuminate\Auth\Events\Registered;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local', 'staging')) {
            $this->app->register(TelescopeServiceProvider::class);
        }

        $this->app->singleton(PaymentGatewayManager::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict(! $this->app->environment('production'));

        // Single resources serialize bare (matching the frontend TS contract);
        // only paginated collections get an envelope, via PaginatedResourceCollection.
        JsonResource::withoutWrapping();

        RateLimiter::for('auth', fn (Request $request) => Limit::perMinute(5)->by($request->ip()));
        // 'checkout' is only ever reached behind auth:sanctum, so user() is always present.
        RateLimiter::for('checkout', fn (Request $request) => Limit::perMinute(10)->by($request->user()->id));
        // Daraja retries failed callbacks itself; this limiter is a backstop against
        // an abusive or misbehaving sender, not the normal-traffic ceiling.
        RateLimiter::for('webhooks', fn (Request $request) => Limit::perMinute(60)->by($request->ip()));

        Event::listen(OrderPlaced::class, SendOrderConfirmationNotification::class);
        Event::listen(OrderPlaced::class, CheckForLowStockAfterOrder::class);
        Event::listen(StockLevelLow::class, NotifyAdminsOfLowStock::class);
        Event::listen(OrderStatusChanged::class, SendOrderStatusChangedNotification::class);
        Event::listen(OrderPlaced::class, InvalidateReportsCache::class);
        Event::listen(Registered::class, InvalidateReportsCache::class);
    }
}
