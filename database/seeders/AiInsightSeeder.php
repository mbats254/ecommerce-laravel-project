<?php

namespace Database\Seeders;

use App\Models\AiInsight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Normally populated nightly by `php artisan app:generate-ai-insights` —
 * seeded here too so GET /admin/ai-insights has something to show
 * immediately on a fresh database, without waiting for the schedule.
 */
class AiInsightSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        AiInsight::factory()->create([
            'title' => 'HP Pavilion 14 is out of stock',
            'description' => 'HP Pavilion 14 has no remaining inventory across all warehouses.',
            'impact' => 'high',
            'metric_label' => 'Units in stock',
            'metric_value' => '0',
        ]);

        AiInsight::factory()->create([
            'title' => 'Dell Inspiron 15 is running low',
            'description' => 'Dell Inspiron 15 is at or below its low-stock threshold.',
            'impact' => 'medium',
            'metric_label' => 'Units in stock',
            'metric_value' => '4',
        ]);

        AiInsight::factory()->create([
            'title' => 'Orders are up 24% week-over-week',
            'description' => 'There were 18 orders in the last 7 days, compared to 14 the week before.',
            'impact' => 'medium',
            'metric_label' => 'Orders this week',
            'metric_value' => '18',
        ]);

        AiInsight::factory()->create([
            'title' => 'Best seller this week: Samsung Galaxy S24',
            'description' => 'Samsung Galaxy S24 was the top-selling product over the last 7 days.',
            'impact' => 'low',
            'metric_label' => 'Units sold',
            'metric_value' => '12',
        ]);
    }
}
