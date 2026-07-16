<?php

use App\Models\Product;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
});

test('toggling a product adds it to the wishlist, toggling again removes it', function () {
    $product = Product::factory()->create();

    $add = $this->actingAs($this->user)->postJson("/api/v1/wishlist/{$product->id}");
    $add->assertOk()->assertJsonPath('inWishlist', true);

    $remove = $this->actingAs($this->user)->postJson("/api/v1/wishlist/{$product->id}");
    $remove->assertOk()->assertJsonPath('inWishlist', false);
});

test('the wishlist index lists only the current users products', function () {
    $mine = Product::factory()->create();
    $other = Product::factory()->create();
    $otherUser = User::factory()->create();

    $this->actingAs($this->user)->postJson("/api/v1/wishlist/{$mine->id}");
    $this->actingAs($otherUser)->postJson("/api/v1/wishlist/{$other->id}");

    $response = $this->actingAs($this->user)->getJson('/api/v1/wishlist');

    $response->assertOk()->assertJsonCount(1)->assertJsonPath('0.id', $mine->id);
});

test('wishlist requires authentication', function () {
    $this->getJson('/api/v1/wishlist')->assertUnauthorized();
});
