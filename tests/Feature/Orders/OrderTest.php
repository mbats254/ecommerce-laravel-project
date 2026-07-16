<?php

use App\Models\Address;
use App\Models\User;

test('a customer can list their own orders paginated', function () {
    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($user)->create();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ]);

    $response = $this->actingAs($user)->getJson('/api/v1/orders');

    $response->assertOk()->assertJsonStructure([
        'data' => [['orderNumber', 'status', 'total']],
        'meta' => ['currentPage', 'perPage', 'total', 'lastPage'],
    ]);
});

test('a customer can view their own order detail with a timeline', function () {
    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($user)->create();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $order = $this->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->json();

    $response = $this->actingAs($user)->getJson("/api/v1/orders/{$order['orderNumber']}");

    $response->assertOk()
        ->assertJsonPath('orderNumber', $order['orderNumber'])
        ->assertJsonPath('timeline.0.status', 'pending');
});

test('a customer cannot view someone elses order', function () {
    $user = User::factory()->create();
    $stranger = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($user)->create();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $order = $this->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->json();

    $this->actingAs($stranger)
        ->getJson("/api/v1/orders/{$order['orderNumber']}")
        ->assertForbidden();
});

test('orders require authentication', function () {
    $this->getJson('/api/v1/orders')->assertUnauthorized();
});
