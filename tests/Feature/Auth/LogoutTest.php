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
