<?php

namespace Database\Factories;

use App\Enums\QuotationStatus;
use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Quotation>
 */
class QuotationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lead_id' => null,
            'customer_id' => null,
            'status' => QuotationStatus::Draft,
            'total' => 0,
            'valid_until' => now()->addDays(14)->toDateString(),
        ];
    }
}
