<?php

use App\Models\Product;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
});

test('toggling a product adds it to the compare list, toggling again removes it', function () {
    $product = Product::factory()->create();

    $add = $this->actingAs($this->user)->postJson("/api/v1/compare/{$product->id}");
    $add->assertOk()->assertJsonPath('inCompareList', true);

    $remove = $this->actingAs($this->user)->postJson("/api/v1/compare/{$product->id}");
    $remove->assertOk()->assertJsonPath('inCompareList', false);
});

test('a fifth product cannot be added to the compare list', function () {
    $products = Product::factory()->count(5)->create();

    foreach ($products->take(4) as $product) {
        $this->actingAs($this->user)->postJson("/api/v1/compare/{$product->id}")->assertOk();
    }

    $this->actingAs($this->user)
        ->postJson("/api/v1/compare/{$products->last()->id}")
        ->assertUnprocessable()
        ->assertJsonValidationErrors('productId');
});
