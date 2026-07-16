<?php

namespace App\Console\Commands;

use App\Enums\InsightImpact;
use App\Enums\StockStatus;
use App\Models\AiInsight;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Console\Command;

/**
 * Rule-based for now — an LLM call could replace the analysis later without
 * touching request latency, since this only ever writes rows the
 * GET /admin/ai-insights endpoint reads (see implementation plan §3.5).
 */
class GenerateAiInsightsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-ai-insights';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Analyze recent orders and stock levels, writing rule-based insights to ai_insights.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->reportLowStock();
        $this->reportSalesTrend();
        $this->reportTopProduct();
    }

    private function reportLowStock(): void
    {
        Product::query()
            ->active()
            ->with('inventoryItems')
            ->get()
            ->each(function (Product $product) {
                if ($product->stock_status === StockStatus::OutOfStock) {
                    AiInsight::create([
                        'title' => "{$product->name} is out of stock",
                        'description' => "{$product->name} ({$product->sku}) has no remaining inventory across all warehouses.",
                        'impact' => InsightImpact::High,
                        'metric_label' => 'Units in stock',
                        'metric_value' => '0',
                    ]);
                } elseif ($product->stock_status === StockStatus::LowStock) {
                    $quantity = $product->inventoryItems->sum('quantity');

                    AiInsight::create([
                        'title' => "{$product->name} is running low",
                        'description' => "{$product->name} ({$product->sku}) is at or below its low-stock threshold.",
                        'impact' => InsightImpact::Medium,
                        'metric_label' => 'Units in stock',
                        'metric_value' => (string) $quantity,
                    ]);
                }
            });
    }

    private function reportSalesTrend(): void
    {
        $thisWeek = Order::query()->where('placed_at', '>=', now()->subDays(7))->count();
        $lastWeek = Order::query()
            ->whereBetween('placed_at', [now()->subDays(14), now()->subDays(7)])
            ->count();

        if ($lastWeek === 0) {
            return;
        }

        $changePercent = round((($thisWeek - $lastWeek) / $lastWeek) * 100);

        if (abs($changePercent) < 20) {
            return;
        }

        $direction = $changePercent > 0 ? 'up' : 'down';

        AiInsight::create([
            'title' => "Orders are {$direction} {$this->absPercent($changePercent)}% week-over-week",
            'description' => "There were {$thisWeek} orders in the last 7 days, compared to {$lastWeek} the week before.",
            'impact' => $changePercent < 0 ? InsightImpact::High : InsightImpact::Medium,
            'metric_label' => 'Orders this week',
            'metric_value' => (string) $thisWeek,
        ]);
    }

    private function reportTopProduct(): void
    {
        $topItem = OrderItem::query()
            ->join('orders', 'orders.id', '=', 'order_items.order_id')
            ->where('orders.placed_at', '>=', now()->subDays(7))
            ->selectRaw('order_items.product_name, order_items.sku, SUM(order_items.quantity) as units_sold')
            ->groupBy('order_items.product_name', 'order_items.sku')
            ->orderByDesc('units_sold')
            ->toBase()
            ->first();

        if ($topItem === null) {
            return;
        }

        AiInsight::create([
            'title' => "Best seller this week: {$topItem->product_name}",
            'description' => "{$topItem->product_name} ({$topItem->sku}) was the top-selling product over the last 7 days.",
            'impact' => InsightImpact::Low,
            'metric_label' => 'Units sold',
            'metric_value' => (string) $topItem->units_sold,
        ]);
    }

    private function absPercent(float $percent): string
    {
        return (string) abs((int) $percent);
    }
}
