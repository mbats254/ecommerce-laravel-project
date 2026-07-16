<?php

namespace Database\Factories;

use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<AuditLog>
 */
class AuditLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'action' => 'inventory.adjusted',
            'subject_type' => 'App\\Models\\InventoryItem',
            'subject_id' => (string) Str::ulid(),
            'changes' => ['quantity' => ['from' => 10, 'to' => 15]],
            'ip_address' => fake()->ipv4(),
        ];
    }
}
