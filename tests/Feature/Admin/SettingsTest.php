<?php

use App\Models\Address;
use App\Models\Setting;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Notification;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Administrator');
});

test('an administrator can view and update settings', function () {
    $this->actingAs($this->admin)->getJson('/api/v1/admin/settings')
        ->assertOk()
        ->assertJsonPath('emailOnNewOrder', true);

    $response = $this->actingAs($this->admin)->putJson('/api/v1/admin/settings', [
        'emailOnNewOrder' => false,
    ]);

    $response->assertOk()->assertJsonPath('emailOnNewOrder', false);
    $this->assertDatabaseHas('settings', ['email_on_new_order' => false]);
});

test('disabling emailOnNewOrder suppresses the order confirmation notification', function () {
    Notification::fake();

    Setting::current()->update(['email_on_new_order' => false]);

    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ]);

    Notification::assertNothingSent();
});

test('a restricted role cannot manage settings', function () {
    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    $this->actingAs($catalogManager)->getJson('/api/v1/admin/settings')->assertForbidden();
});
