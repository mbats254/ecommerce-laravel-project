<?php

namespace Database\Factories;

use App\Enums\AdminUserStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->e164PhoneNumber(),
            'avatar_url' => null,
            'email_verified_at' => now(),
            'last_login_at' => null,
            'status' => AdminUserStatus::Active,
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model should be invited but not yet active.
     */
    public function invited(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => AdminUserStatus::Invited,
            'email_verified_at' => null,
        ]);
    }

    /**
     * Indicate that the model should be suspended.
     */
    public function suspended(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => AdminUserStatus::Suspended,
        ]);
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
