<?php

use App\Actions\Order\TransitionOrderStatusAction;
use App\Enums\OrderStatus;
use App\Models\Address;
use App\Models\Order;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

function placeOrderFor(User $user, array $overrides = []): Order
{
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($user)->create();

    test()->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);

    $response = test()->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
        ...$overrides,
    ]);

    return Order::query()->findOrFail($response->json('id'));
}

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Sales & Support');
});

test('every legal transition in the state machine succeeds', function () {
    $order = placeOrderFor(User::factory()->create());

    $sequence = ['processing', 'packing', 'shipped', 'delivered'];

    foreach ($sequence as $status) {
        $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/orders/{$order->id}/status", [
            'status' => $status,
        ]);

        $response->assertOk()->assertJsonPath('status', $status);
    }

    expect($order->fresh()->statusHistory)->toHaveCount(5); // initial pending + 4 transitions
});

test('an illegal transition is rejected with 422 and never touches order_status_history', function () {
    $order = placeOrderFor(User::factory()->create());

    app(TransitionOrderStatusAction::class)->handle($order, OrderStatus::Processing);
    app(TransitionOrderStatusAction::class)->handle($order->fresh(), OrderStatus::Packing);
    app(TransitionOrderStatusAction::class)->handle($order->fresh(), OrderStatus::Shipped);
    app(TransitionOrderStatusAction::class)->handle($order->fresh(), OrderStatus::Delivered);

    $historyCountBefore = $order->fresh()->statusHistory()->count();

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/orders/{$order->id}/status", [
        'status' => 'pending',
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('status');
    expect($order->fresh()->status)->toBe(OrderStatus::Delivered)
        ->and($order->fresh()->statusHistory()->count())->toBe($historyCountBefore);
});

test('cancelling via the admin status endpoint restocks inventory', function () {
    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 5);
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 2]);
    $order = $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->json();

    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 3]);

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/orders/{$order['id']}/status", [
        'status' => 'cancelled',
        'note' => 'Customer requested cancellation via support.',
    ]);

    $response->assertOk()->assertJsonPath('status', 'cancelled');
    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 5]);
});

test('admin orders can be filtered by status', function () {
    $orderA = placeOrderFor(User::factory()->create());
    placeOrderFor(User::factory()->create());

    app(TransitionOrderStatusAction::class)->handle($orderA, OrderStatus::Processing);

    $response = $this->actingAs($this->admin)->getJson('/api/v1/admin/orders?status=processing');

    $response->assertOk();
    expect($response->json('meta.total'))->toBe(1)
        ->and($response->json('data.0.id'))->toBe($orderA->id);
});

test('the admin order detail exposes the same timeline shape the customer sees', function () {
    $customer = User::factory()->create();
    $order = placeOrderFor($customer);

    $adminView = $this->actingAs($this->admin)->getJson("/api/v1/admin/orders/{$order->id}")->json();
    $customerView = $this->actingAs($customer)->getJson("/api/v1/orders/{$order->order_number}")->json();

    expect($adminView['timeline'])->toBe($customerView['timeline']);
});

test('a restricted role cannot manage orders', function () {
    $order = placeOrderFor(User::factory()->create());
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $this->actingAs($marketer)->getJson('/api/v1/admin/orders')->assertForbidden();
    $this->actingAs($marketer)
        ->patchJson("/api/v1/admin/orders/{$order->id}/status", ['status' => 'processing'])
        ->assertForbidden();
});
