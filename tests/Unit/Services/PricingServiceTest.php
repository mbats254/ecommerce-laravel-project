<?php

use App\Models\CartItem;
use App\Services\PricingService;
use Illuminate\Database\Eloquent\Collection;

test('standard delivery applies the configured standard fee', function () {
    $items = new Collection([new CartItem(['unit_price' => 1000, 'quantity' => 2])]);

    $result = (new PricingService)->calculate($items, deliveryMethod: 'standard');

    expect($result['subtotal'])->toBe(2000.0)
        ->and($result['deliveryFee'])->toBe((float) config('shipping.delivery_fees.standard'))
        ->and($result['vat'])->toBe(round(2000 * (float) config('shipping.vat_rate'), 2));
});

test('express delivery applies the configured express fee instead of standard', function () {
    $items = new Collection([new CartItem(['unit_price' => 1000, 'quantity' => 1])]);

    $result = (new PricingService)->calculate($items, deliveryMethod: 'express');

    expect($result['deliveryFee'])->toBe((float) config('shipping.delivery_fees.express'))
        ->and($result['deliveryFee'])->not->toBe((float) config('shipping.delivery_fees.standard'));
});

test('an unknown delivery method falls back to the standard fee', function () {
    $items = new Collection([new CartItem(['unit_price' => 1000, 'quantity' => 1])]);

    $result = (new PricingService)->calculate($items, deliveryMethod: 'overnight-drone');

    expect($result['deliveryFee'])->toBe((float) config('shipping.delivery_fees.standard'));
});

test('a discount larger than the subtotal floors the discounted amount at zero rather than going negative', function () {
    $items = new Collection([new CartItem(['unit_price' => 500, 'quantity' => 1])]);

    $result = (new PricingService)->calculate($items, discount: 999_999, deliveryMethod: 'standard');

    expect($result['vat'])->toBe(0.0)
        ->and($result['total'])->toBe((float) config('shipping.delivery_fees.standard'));
});

test('the total is the sum of discounted subtotal, delivery fee, and vat', function () {
    $items = new Collection([new CartItem(['unit_price' => 1000, 'quantity' => 1])]);

    $result = (new PricingService)->calculate($items, discount: 100, deliveryMethod: 'standard');

    // discounted subtotal 900, vat 16% -> 144, delivery 300 -> total 1344
    expect($result['discount'])->toBe(100.0)
        ->and($result['vat'])->toBe(144.0)
        ->and($result['total'])->toBe(1344.0);
});
