<?php

namespace Database\Factories;

use App\Enums\LeadStatus;
use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lead>
 */
class LeadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company(),
            'contact_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->e164PhoneNumber(),
            'source' => fake()->randomElement(['website', 'referral', 'trade-show']),
            'status' => LeadStatus::New,
            'assigned_to' => null,
        ];
    }
}
