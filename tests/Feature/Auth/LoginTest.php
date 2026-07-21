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

test('a non-frontend client (e.g. Postman) gets a bearer token instead of a session', function () {
    /** @var TestCase $this */
    $user = User::factory()->create(['password' => 'Password123!']);

    $response = $this->withoutHeader('Origin')->postJson('/api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'Password123!',
    ]);

    $response->assertOk()->assertJsonPath('email', $user->email);
    expect($response->json('token'))->toBeString();
    $this->assertGuest();

    $token = $response->json('token');
    $this->withoutHeader('Origin')
        ->withHeader('Authorization', "Bearer {$token}")
        ->getJson('/api/v1/auth/me')
        ->assertOk()
        ->assertJsonPath('email', $user->email);
});

test('the stateful response never includes a token field', function () {
    /** @var TestCase $this */
    $user = User::factory()->create(['password' => 'Password123!']);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'Password123!',
    ]);

    $response->assertOk()->assertJsonMissingPath('token');
});
