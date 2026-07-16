<?php

use App\Models\Coupon;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Marketing');
});

test('marketing can list, create, update, and delete coupons', function () {
    $this->actingAs($this->admin)->getJson('/api/v1/admin/coupons')
        ->assertOk()
        ->assertJsonStructure(['data', 'meta' => ['currentPage', 'perPage', 'total', 'lastPage']]);

    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/coupons', [
        'code' => 'BLACKFRIDAY',
        'type' => 'percentage',
        'value' => 20,
    ]);
    $response->assertCreated()->assertJsonPath('code', 'BLACKFRIDAY');

    $coupon = Coupon::query()->where('code', 'BLACKFRIDAY')->firstOrFail();

    $this->actingAs($this->admin)->putJson("/api/v1/admin/coupons/{$coupon->id}", ['value' => 25])
        ->assertOk()->assertJsonPath('value', 25);

    $this->actingAs($this->admin)->deleteJson("/api/v1/admin/coupons/{$coupon->id}")->assertNoContent();
    $this->assertSoftDeleted('coupons', ['id' => $coupon->id]);
});

test('a restricted role cannot manage coupons', function () {
    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    $this->actingAs($catalogManager)->getJson('/api/v1/admin/coupons')->assertForbidden();
});
