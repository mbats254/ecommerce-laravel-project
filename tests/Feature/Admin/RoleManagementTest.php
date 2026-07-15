<?php

use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
});

test('an admin can list roles with their permissions', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Administrator');

    $response = $this->actingAs($admin)->getJson('/api/v1/admin/roles');

    $response->assertOk();
    expect($response->json('data'))->toHaveCount(4);
});

test('an admin can create a new role with permissions', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Administrator');

    $response = $this->actingAs($admin)->postJson('/api/v1/admin/roles', [
        'name' => 'Warehouse Lead',
        'permissions' => ['products.manage', 'reports.view'],
    ]);

    $response->assertCreated()->assertJsonPath('name', 'Warehouse Lead');
    expect($response->json('permissions'))->toEqualCanonicalizing(['products.manage', 'reports.view']);
});

test('creating a role rejects an unknown permission', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Administrator');

    $response = $this->actingAs($admin)->postJson('/api/v1/admin/roles', [
        'name' => 'Warehouse Lead',
        'permissions' => ['not-a-real-permission'],
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('permissions.0');
});

test('a restricted role cannot manage roles', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $response = $this->actingAs($marketer)->postJson('/api/v1/admin/roles', [
        'name' => 'Warehouse Lead',
        'permissions' => ['products.manage'],
    ]);

    $response->assertForbidden();
});
