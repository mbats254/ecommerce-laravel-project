<?php

use App\Actions\Address\SetDefaultAddressAction;
use App\Models\Address;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('setting a new default unsets every other address for that user', function () {
    $user = User::factory()->create();
    $first = Address::factory()->for($user)->default()->create();
    $second = Address::factory()->for($user)->create();

    (new SetDefaultAddressAction)->handle($user, $second);

    expect($first->fresh()->is_default)->toBeFalse()
        ->and($second->fresh()->is_default)->toBeTrue();
});

test('it does not affect another user\'s default address', function () {
    $userA = User::factory()->create();
    $userB = User::factory()->create();
    $addressA = Address::factory()->for($userA)->default()->create();
    $addressB = Address::factory()->for($userB)->create();

    (new SetDefaultAddressAction)->handle($userB, $addressB);

    expect($addressA->fresh()->is_default)->toBeTrue();
});
