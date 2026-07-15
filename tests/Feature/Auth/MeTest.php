<?php

use App\Models\User;

test('an authenticated user can fetch their own profile', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->getJson('/api/v1/auth/me');

    $response->assertOk()
        ->assertJsonPath('id', $user->id)
        ->assertJsonPath('email', $user->email);
});

test('fetching the profile requires authentication', function () {
    $response = $this->getJson('/api/v1/auth/me');

    $response->assertUnauthorized();
});
