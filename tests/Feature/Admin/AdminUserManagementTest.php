<?php

use App\Enums\AdminUserStatus;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Notification;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
});

test('an admin with users.manage can create a new admin user with a role', function () {
    Notification::fake();

    $admin = User::factory()->create();
    $admin->assignRole('Administrator');

    $response = $this->actingAs($admin)->postJson('/api/v1/admin/users', [
        'name' => 'New Staffer',
        'email' => 'staffer@anchor.africa',
        'role' => 'Catalog Manager',
    ]);

    $response->assertCreated()
        ->assertJsonPath('email', 'staffer@anchor.africa')
        ->assertJsonPath('role', 'Catalog Manager')
        ->assertJsonPath('status', AdminUserStatus::Invited->value);

    $created = User::where('email', 'staffer@anchor.africa')->firstOrFail();
    expect($created->hasRole('Catalog Manager'))->toBeTrue();
});

test('a restricted role cannot manage admin users', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $response = $this->actingAs($marketer)->getJson('/api/v1/admin/users');

    $response->assertForbidden();
});

test('an admin can update an existing admin user\'s role and status', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Administrator');

    $staffer = User::factory()->create();
    $staffer->assignRole('Catalog Manager');

    $response = $this->actingAs($admin)->putJson("/api/v1/admin/users/{$staffer->id}", [
        'role' => 'Marketing',
        'status' => 'suspended',
    ]);

    $response->assertOk()
        ->assertJsonPath('role', 'Marketing')
        ->assertJsonPath('status', 'suspended');

    expect($staffer->fresh()->hasRole('Marketing'))->toBeTrue()
        ->and($staffer->fresh()->hasRole('Catalog Manager'))->toBeFalse();
});

test('admin user management requires authentication', function () {
    $this->getJson('/api/v1/admin/users')->assertUnauthorized();
});
