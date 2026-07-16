<?php

use App\Actions\Cart\MergeGuestCartAction;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\User;

test('a guest can add an item to their session cart', function () {
    $product = createInStockProduct(['price' => 1000]);

    $response = $this->postJson('/api/v1/cart/items', [
        'productId' => $product->id,
        'quantity' => 2,
    ]);

    $response->assertCreated()
        ->assertJsonPath('quantity', 2)
        ->assertJsonPath('product.id', $product->id);
});

test('adding the same product again increments quantity instead of duplicating', function () {
    $user = User::factory()->create();
    $product = createInStockProduct();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 2]);

    $response = $this->actingAs($user)->getJson('/api/v1/cart');

    $response->assertOk()->assertJsonCount(1, 'items');
    expect($response->json('items.0.quantity'))->toBe(3);
});

test('an out of stock product cannot be added to the cart', function () {
    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->outOfStock()->create();

    $this->postJson('/api/v1/cart/items', [
        'productId' => $product->id,
        'quantity' => 1,
    ])->assertUnprocessable()->assertJsonValidationErrors('productId');
});

test('a cart item quantity can be updated', function () {
    $user = User::factory()->create();
    $product = createInStockProduct();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $itemId = $this->actingAs($user)->getJson('/api/v1/cart')->json('items.0.id');

    $response = $this->actingAs($user)->patchJson("/api/v1/cart/items/{$itemId}", ['quantity' => 5]);

    $response->assertOk()->assertJsonPath('quantity', 5);
});

test('a cart item can be removed', function () {
    $user = User::factory()->create();
    $product = createInStockProduct();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $itemId = $this->actingAs($user)->getJson('/api/v1/cart')->json('items.0.id');

    $this->actingAs($user)->deleteJson("/api/v1/cart/items/{$itemId}")->assertNoContent();

    expect($this->actingAs($user)->getJson('/api/v1/cart')->json('items'))->toBeEmpty();
});

test('a guest cart is merged into the user cart on login', function () {
    $user = User::factory()->create();
    $product = createInStockProduct();

    $guestCart = Cart::factory()->guest()->create(['session_id' => 'guest-session-abc']);
    CartItem::factory()->for($guestCart)->create([
        'product_id' => $product->id,
        'quantity' => 2,
        'unit_price' => $product->price,
    ]);

    app(MergeGuestCartAction::class)->handle($user, 'guest-session-abc');

    $userCart = Cart::query()->where('user_id', $user->id)->with('items')->first();

    expect($userCart)->not->toBeNull()
        ->and($userCart->items)->toHaveCount(1)
        ->and($userCart->items->first()->quantity)->toBe(2);

    expect(Cart::query()->find($guestCart->id))->toBeNull();
});

test('merging a guest cart combines quantities for a product already in the user cart', function () {
    $user = User::factory()->create();
    $product = createInStockProduct();

    $userCart = Cart::factory()->create(['user_id' => $user->id]);
    CartItem::factory()->for($userCart)->create([
        'product_id' => $product->id,
        'quantity' => 1,
        'unit_price' => $product->price,
    ]);

    $guestCart = Cart::factory()->guest()->create(['session_id' => 'guest-session-xyz']);
    CartItem::factory()->for($guestCart)->create([
        'product_id' => $product->id,
        'quantity' => 3,
        'unit_price' => $product->price,
    ]);

    app(MergeGuestCartAction::class)->handle($user, 'guest-session-xyz');

    $userCart->refresh();

    expect($userCart->items)->toHaveCount(1)
        ->and($userCart->items->first()->quantity)->toBe(4);
});
