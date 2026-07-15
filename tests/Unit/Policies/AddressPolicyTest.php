<?php

use App\Models\Address;
use App\Models\User;
use App\Policies\AddressPolicy;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('a user can view, update, and delete only their own address', function () {
    $owner = User::factory()->create();
    $other = User::factory()->create();
    $address = Address::factory()->for($owner)->create();

    $policy = new AddressPolicy;

    expect($policy->view($owner, $address))->toBeTrue()
        ->and($policy->update($owner, $address))->toBeTrue()
        ->and($policy->delete($owner, $address))->toBeTrue()
        ->and($policy->view($other, $address))->toBeFalse()
        ->and($policy->update($other, $address))->toBeFalse()
        ->and($policy->delete($other, $address))->toBeFalse();
});

test('any authenticated user can create an address', function () {
    $user = User::factory()->create();

    expect((new AddressPolicy)->create($user))->toBeTrue();
});
