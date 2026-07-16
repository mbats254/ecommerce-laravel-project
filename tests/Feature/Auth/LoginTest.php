<?php

use App\Models\User;
use Tests\TestCase;

test('a user can log in with valid credentials', function () {
    /** @var TestCase $this */
    $user = User::factory()->create(['password' => 'Password123!']);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'Password123!',
    ]);

    $response->assertOk()->assertJsonPath('email', $user->email);
    $this->assertAuthenticatedAs($user);

    expect($user->fresh()->last_login_at)->not->toBeNull();
});

test('login is rejected with invalid credentials', function () {
    /** @var TestCase $this */
    $user = User::factory()->create(['password' => 'Password123!']);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertUnauthorized();
    $this->assertGuest();
});
