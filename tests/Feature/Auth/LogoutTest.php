<?php

use App\Models\User;

test('an authenticated user can log out', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/auth/logout');

    $response->assertNoContent();
    $this->assertGuest('web');
});

test('logout requires authentication', function () {
    $response = $this->postJson('/api/v1/auth/logout');

    $response->assertUnauthorized();
});

test('a token-authenticated client logging out revokes only that token', function () {
    $user = User::factory()->create();
    $token = $user->createToken('api-client')->plainTextToken;
    $otherToken = $user->createToken('other-device')->plainTextToken;

    $this->withoutHeader('Origin')
        ->withHeader('Authorization', "Bearer {$token}")
        ->postJson('/api/v1/auth/logout')
        ->assertNoContent();

    $this->assertDatabaseCount('personal_access_tokens', 1);

    $this->withoutHeader('Origin')
        ->withHeader('Authorization', "Bearer {$otherToken}")
        ->getJson('/api/v1/auth/me')
        ->assertOk();
});
