<?php

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Notification;

test('a user can request a password reset link', function () {
    Notification::fake();

    $user = User::factory()->create();

    $response = $this->postJson('/api/v1/auth/password/forgot', [
        'email' => $user->email,
    ]);

    $response->assertNoContent();
    Notification::assertSentTo($user, ResetPassword::class);
});

test('requesting a reset link for an unknown email still returns success', function () {
    Notification::fake();

    $response = $this->postJson('/api/v1/auth/password/forgot', [
        'email' => 'nobody@example.com',
    ]);

    $response->assertNoContent();
});

test('a user can reset their password with a valid token', function () {
    Notification::fake();

    $user = User::factory()->create();

    $this->postJson('/api/v1/auth/password/forgot', ['email' => $user->email]);

    $token = null;
    Notification::assertSentTo($user, ResetPassword::class, function (ResetPassword $notification) use (&$token) {
        $token = $notification->token;

        return true;
    });

    $response = $this->postJson('/api/v1/auth/password/reset', [
        'token' => $token,
        'email' => $user->email,
        'password' => 'NewPassword123!',
        'password_confirmation' => 'NewPassword123!',
    ]);

    $response->assertNoContent();

    $loginResponse = $this->postJson('/api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'NewPassword123!',
    ]);
    $loginResponse->assertOk();
});

test('resetting a password with an invalid token fails validation', function () {
    $user = User::factory()->create();

    $response = $this->postJson('/api/v1/auth/password/reset', [
        'token' => 'not-a-real-token',
        'email' => $user->email,
        'password' => 'NewPassword123!',
        'password_confirmation' => 'NewPassword123!',
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('email');
});
