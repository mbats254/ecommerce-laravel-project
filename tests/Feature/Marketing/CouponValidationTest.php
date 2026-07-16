<?php

use App\Models\Coupon;

test('a valid percentage coupon returns the correct discount', function () {
    Coupon::factory()->create(['code' => 'SAVE10', 'type' => 'percentage', 'value' => 10]);

    $response = $this->postJson('/api/v1/coupons/validate', [
        'code' => 'SAVE10',
        'cartTotal' => 1000,
    ]);

    $response->assertOk()->assertJsonPath('discount', 100);
});

test('a fixed coupon never discounts more than the cart total', function () {
    Coupon::factory()->fixed(500)->create(['code' => 'FIXED500']);

    $response = $this->postJson('/api/v1/coupons/validate', [
        'code' => 'FIXED500',
        'cartTotal' => 300,
    ]);

    $response->assertOk()->assertJsonPath('discount', 300);
});

test('an expired coupon is rejected', function () {
    Coupon::factory()->expired()->create(['code' => 'OLD']);

    $this->postJson('/api/v1/coupons/validate', ['code' => 'OLD', 'cartTotal' => 1000])
        ->assertUnprocessable()
        ->assertJsonValidationErrors('code');
});

test('an exhausted coupon is rejected', function () {
    Coupon::factory()->exhausted()->create(['code' => 'USEDUP']);

    $this->postJson('/api/v1/coupons/validate', ['code' => 'USEDUP', 'cartTotal' => 1000])
        ->assertUnprocessable()
        ->assertJsonValidationErrors('code');
});

test('an unknown coupon code is rejected', function () {
    $this->postJson('/api/v1/coupons/validate', ['code' => 'NOPE', 'cartTotal' => 1000])
        ->assertUnprocessable()
        ->assertJsonValidationErrors('code');
});
