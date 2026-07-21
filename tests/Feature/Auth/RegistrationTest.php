<?php

use App\Models\User;
use App\Notifications\QueuedVerifyEmailNotification;
use Illuminate\Support\Facades\Notification;

test('a guest can register with valid details', function () {
    Notification::fake();

    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'Jane Wanjiru',
        'email' => 'jane@example.com',
        'phone' => '+254712345678',
        'password' => 'Password123!',
        'password_confirmation' => 'Password123!',
    ]);

    $response->assertCreated()
        ->assertJsonPath('email', 'jane@example.com')
        ->assertJsonMissing(['password']);

    $this->assertDatabaseHas('users', ['email' => 'jane@example.com']);

    $user = User::where('email', 'jane@example.com')->firstOrFail();
    Notification::assertSentTo($user, QueuedVerifyEmailNotification::class);

    $this->assertAuthenticatedAs($user);
});

test('registration requires matching password confirmation', function () {
    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'Jane Wanjiru',
        'email' => 'jane@example.com',
        'password' => 'Password123!',
        'password_confirmation' => 'something-else',
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('password');
});

test('registration rejects a duplicate email', function () {
    User::factory()->create(['email' => 'jane@example.com']);

    $response = $this->postJson('/api/v1/auth/register', [
        'name' => 'Jane Wanjiru',
        'email' => 'jane@example.com',
        'password' => 'Password123!',
        'password_confirmation' => 'Password123!',
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('email');
});

test('a non-frontend client (e.g. Postman) gets a bearer token instead of a session on registration', function () {
    Notification::fake();

    $response = $this->withoutHeader('Origin')->postJson('/api/v1/auth/register', [
        'name' => 'Jane Wanjiru',
        'email' => 'jane@example.com',
        'phone' => '+254712345678',
        'password' => 'Password123!',
        'password_confirmation' => 'Password123!',
    ]);

    $response->assertCreated()->assertJsonPath('email', 'jane@example.com');
    expect($response->json('token'))->toBeString();
    $this->assertGuest();

    $token = $response->json('token');
    $this->withoutHeader('Origin')
        ->withHeader('Authorization', "Bearer {$token}")
        ->getJson('/api/v1/auth/me')
        ->assertOk()
        ->assertJsonPath('email', 'jane@example.com');
});
