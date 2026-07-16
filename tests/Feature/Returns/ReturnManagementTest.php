<?php

use App\Actions\Order\TransitionOrderStatusAction;
use App\Enums\OrderStatus;
use App\Models\Address;
use App\Models\Order;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

function deliverOrderWithItems(User $customer, array $products): Order
{
    $address = Address::factory()->for($customer)->create();

    foreach ($products as $product) {
        test()->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    }

    $response = test()->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ]);

    $order = Order::query()->findOrFail($response->json('id'));

    $transition = app(TransitionOrderStatusAction::class);
    $transition->handle($order, OrderStatus::Processing);
    $transition->handle($order->fresh(), OrderStatus::Packing);
    $transition->handle($order->fresh(), OrderStatus::Shipped);
    $transition->handle($order->fresh(), OrderStatus::Delivered);

    return $order->fresh(['items']);
}

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Sales & Support');
});

test('a customer can request a return for a delivered order item', function () {
    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $order = deliverOrderWithItems($customer, [$product]);

    $response = $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $order->items->first()->id,
        'reason' => 'Item arrived damaged.',
    ]);

    $response->assertCreated()->assertJsonPath('status', 'requested');
});

test('a return cannot be requested for a non-delivered order', function () {
    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $order = $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->json();

    $this->actingAs($customer)->postJson("/api/v1/orders/{$order['orderNumber']}/returns", [
        'orderItemId' => $order['items'][0]['id'],
        'reason' => 'Changed my mind.',
    ])->assertUnprocessable()->assertJsonValidationErrors('orderItemId');
});

test('a return cannot be requested twice for the same order item', function () {
    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $order = deliverOrderWithItems($customer, [$product]);
    $itemId = $order->items->first()->id;

    $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $itemId,
        'reason' => 'Damaged.',
    ])->assertCreated();

    $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $itemId,
        'reason' => 'Damaged again?',
    ])->assertUnprocessable()->assertJsonValidationErrors('orderItemId');
});

test('approving a return restocks inventory and writes a refund payment record', function () {
    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $order = deliverOrderWithItems($customer, [$product]);
    $item = $order->items->first();

    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 9]);

    $return = $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $item->id,
        'reason' => 'Wrong size.',
    ])->json();

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/returns/{$return['id']}", [
        'status' => 'approved',
    ]);

    $response->assertOk()->assertJsonPath('status', 'refunded');

    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 10]);
    $this->assertDatabaseHas('payments', [
        'order_id' => $order->id,
        'amount' => -1000,
        'status' => 'successful',
    ]);
    expect($order->fresh()->status)->toBe(OrderStatus::Refunded);
});

test('the order only becomes refunded once every item has been refunded', function () {
    $customer = User::factory()->create();
    $productA = createInStockProduct(['price' => 1000], quantity: 10);
    $productB = createInStockProduct(['price' => 2000], quantity: 10);
    $order = deliverOrderWithItems($customer, [$productA, $productB]);

    $itemA = $order->items[0];
    $itemB = $order->items[1];

    $returnA = $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $itemA->id,
        'reason' => 'Not needed.',
    ])->json();

    $this->actingAs($this->admin)->patchJson("/api/v1/admin/returns/{$returnA['id']}", ['status' => 'approved'])
        ->assertOk()->assertJsonPath('status', 'refunded');

    expect($order->fresh()->status)->toBe(OrderStatus::Delivered);

    $returnB = $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $itemB->id,
        'reason' => 'Not needed either.',
    ])->json();

    $this->actingAs($this->admin)->patchJson("/api/v1/admin/returns/{$returnB['id']}", ['status' => 'approved'])
        ->assertOk();

    expect($order->fresh()->status)->toBe(OrderStatus::Refunded);
});

test('rejecting a return leaves stock and order status untouched', function () {
    $customer = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $order = deliverOrderWithItems($customer, [$product]);

    $return = $this->actingAs($customer)->postJson("/api/v1/orders/{$order->order_number}/returns", [
        'orderItemId' => $order->items->first()->id,
        'reason' => 'No longer needed.',
    ])->json();

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/returns/{$return['id']}", [
        'status' => 'rejected',
    ]);

    $response->assertOk()->assertJsonPath('status', 'rejected');
    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 9]);
    expect($order->fresh()->status)->toBe(OrderStatus::Delivered);
});

test('a restricted role cannot manage returns', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $this->actingAs($marketer)->getJson('/api/v1/admin/returns')->assertForbidden();
});
