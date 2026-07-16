<?php

use App\Payments\Gateways\CashOnDeliveryGateway;
use App\Payments\Gateways\MpesaGateway;
use App\Payments\Gateways\StripeGateway;
use App\Payments\PaymentGatewayManager;

test('the mpesa payment method resolves the mpesa gateway', function () {
    expect(app(PaymentGatewayManager::class)->driver('mpesa'))->toBeInstanceOf(MpesaGateway::class);
});

test('the card payment method resolves the stripe gateway', function () {
    expect(app(PaymentGatewayManager::class)->driver('card'))->toBeInstanceOf(StripeGateway::class);
});

test('the cash_on_delivery payment method resolves the cash on delivery gateway', function () {
    expect(app(PaymentGatewayManager::class)->driver('cash_on_delivery'))->toBeInstanceOf(CashOnDeliveryGateway::class);
});

test('the default driver is cash on delivery', function () {
    expect(app(PaymentGatewayManager::class)->driver())->toBeInstanceOf(CashOnDeliveryGateway::class);
});
