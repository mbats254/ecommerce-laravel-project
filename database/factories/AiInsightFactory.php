<?php

namespace Database\Factories;

use App\Enums\InsightImpact;
use App\Models\AiInsight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AiInsight>
 */
class AiInsightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'impact' => fake()->randomElement(InsightImpact::cases()),
            'metric_label' => 'Orders this week',
            'metric_value' => (string) fake()->numberBetween(10, 500),
        ];
    }
}
