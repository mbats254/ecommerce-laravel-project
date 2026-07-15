<?php

use App\Models\Address;
use App\Models\User;

test('a user can list their own addresses', function () {
    $user = User::factory()->create();
    Address::factory()->for($user)->count(2)->create();
    Address::factory()->create(); // another user's address

    $response = $this->actingAs($user)->getJson('/api/v1/account/addresses');

    $response->assertOk()->assertJsonCount(2);
});

test('a user can create an address, which becomes their default automatically', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/account/addresses', [
        'label' => 'Home',
        'full_name' => 'Jane Wanjiru',
        'phone' => '+254712345678',
        'county' => 'Nairobi',
        'address_line' => '14 Riverside Drive',
    ]);

    $response->assertCreated()->assertJsonPath('isDefault', true);
    $this->assertDatabaseHas('addresses', ['user_id' => $user->id, 'is_default' => true]);
});

test('marking a new address as default unsets the previous default', function () {
    $user = User::factory()->create();
    $first = Address::factory()->for($user)->default()->create();

    $response = $this->actingAs($user)->postJson('/api/v1/account/addresses', [
        'label' => 'Office',
        'full_name' => 'Jane Wanjiru',
        'phone' => '+254712345678',
        'county' => 'Nairobi',
        'address_line' => '5 Kimathi Street',
        'is_default' => true,
    ]);

    $response->assertCreated()->assertJsonPath('isDefault', true);
    expect($first->fresh()->is_default)->toBeFalse();
});

test('a user can update their own address', function () {
    $user = User::factory()->create();
    $address = Address::factory()->for($user)->create(['city' => 'Nairobi']);

    $response = $this->actingAs($user)->patchJson("/api/v1/account/addresses/{$address->id}", [
        'city' => 'Mombasa',
    ]);

    $response->assertOk()->assertJsonPath('city', 'Mombasa');
});

test('a user cannot update another user\'s address', function () {
    $owner = User::factory()->create();
    $address = Address::factory()->for($owner)->create();
    $other = User::factory()->create();

    $response = $this->actingAs($other)->patchJson("/api/v1/account/addresses/{$address->id}", [
        'city' => 'Mombasa',
    ]);

    $response->assertForbidden();
});

test('a user can delete their own address', function () {
    $user = User::factory()->create();
    $address = Address::factory()->for($user)->create();

    $response = $this->actingAs($user)->deleteJson("/api/v1/account/addresses/{$address->id}");

    $response->assertNoContent();
    $this->assertSoftDeleted($address);
});

test('a user cannot delete another user\'s address', function () {
    $owner = User::factory()->create();
    $address = Address::factory()->for($owner)->create();
    $other = User::factory()->create();

    $response = $this->actingAs($other)->deleteJson("/api/v1/account/addresses/{$address->id}");

    $response->assertForbidden();
    $this->assertDatabaseHas('addresses', ['id' => $address->id, 'deleted_at' => null]);
});

test('address endpoints require authentication', function () {
    $this->getJson('/api/v1/account/addresses')->assertUnauthorized();
});
