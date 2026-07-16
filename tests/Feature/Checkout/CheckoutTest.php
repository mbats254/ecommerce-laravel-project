<?php

use App\Enums\OrderStatus;
use App\Models\Address;
use App\Models\CartItem;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Testing\TestResponse;

function checkoutAs(User $user, array $overrides = []): TestResponse
{
    $address = Address::factory()->for($user)->create();

    return test()->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
        ...$overrides,
    ]);
}

test('a customer can check out with cash on delivery and the order matches the computed pricing', function () {
    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000]);

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 2]);

    $response = checkoutAs($user);

    $response->assertCreated()
        ->assertJsonPath('status', 'pending')
        ->assertJsonPath('subtotal', 2000)
        ->assertJsonPath('deliveryFee', 300)
        ->assertJsonPath('vat', 320)
        ->assertJsonPath('total', 2620)
        ->assertJsonCount(1, 'items');

    $this->assertDatabaseCount('orders', 1);
    expect(CartItem::query()->count())->toBe(0);
});

test('checkout applies a valid coupon discount to the order total', function () {
    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000]);
    Coupon::factory()->create(['code' => 'SAVE10', 'type' => 'percentage', 'value' => 10]);

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);

    $response = checkoutAs($user, ['couponCode' => 'SAVE10']);

    // subtotal 1000, discount 100 -> discounted 900, vat 144, delivery 300, total 1344
    $response->assertCreated()->assertJsonPath('total', 1344);
    $this->assertDatabaseHas('coupons', ['code' => 'SAVE10', 'used_count' => 1]);
});

test('checkout fails with an empty cart', function () {
    $user = User::factory()->create();

    checkoutAs($user)->assertUnprocessable()->assertJsonValidationErrors('cart');
});

test('checkout re-validates price at the current product price, ignoring a stale cart snapshot', function () {
    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000]);

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);

    // Price changes after the item was added to the cart.
    $product->update(['price' => 1500]);

    $response = checkoutAs($user);

    $response->assertCreated()->assertJsonPath('subtotal', 1500);
});

test('exactly one of many checkout attempts succeeds against a single unit of stock', function () {
    $product = createInStockProduct(['price' => 1000], quantity: 1);

    $succeeded = 0;
    $failed = 0;

    foreach (range(1, 10) as $i) {
        $user = User::factory()->create();
        $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);

        $response = checkoutAs($user);

        if ($response->status() === 201) {
            $succeeded++;
        } else {
            $failed++;
        }
    }

    expect($succeeded)->toBe(1)
        ->and($failed)->toBe(9);

    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 0]);
});

test('a race against multiple units of stock oversells by exactly zero', function () {
    $product = createInStockProduct(['price' => 1000], quantity: 5);

    $succeeded = 0;
    $failed = 0;

    foreach (range(1, 20) as $i) {
        $user = User::factory()->create();
        $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);

        $response = checkoutAs($user);

        if ($response->status() === 201) {
            $succeeded++;
        } else {
            $failed++;
        }
    }

    expect($succeeded)->toBe(5)
        ->and($failed)->toBe(15);

    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 0]);
});

test('a customer can cancel a pending order and stock is restored', function () {
    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 5);

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 2]);
    $order = checkoutAs($user)->json();

    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 3]);

    $response = $this->actingAs($user)->postJson("/api/v1/orders/{$order['orderNumber']}/cancel");

    $response->assertOk()->assertJsonPath('status', OrderStatus::Cancelled->value);
    $this->assertDatabaseHas('inventory_items', ['product_id' => $product->id, 'quantity' => 5]);
});

test('another user cannot cancel someone elses order', function () {
    $user = User::factory()->create();
    $stranger = User::factory()->create();
    $product = createInStockProduct(['price' => 1000]);

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $order = checkoutAs($user)->json();

    $this->actingAs($stranger)
        ->postJson("/api/v1/orders/{$order['orderNumber']}/cancel")
        ->assertForbidden();
});
