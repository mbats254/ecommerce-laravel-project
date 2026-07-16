<?php

use App\Enums\PaymentProvider;
use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Models\Payment;
use App\Payments\Gateways\StripeGateway;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

uses(RefreshDatabase::class);

test('initiating a payment intent calls stripe and returns a pending intent with its reference', function () {
    Http::fake([
        'api.stripe.com/v1/payment_intents' => Http::response(['id' => 'pi_123']),
    ]);

    $order = Order::factory()->make(['total' => 1000, 'order_number' => 'AT10001']);

    $intent = (new StripeGateway)->initiate($order);

    expect($intent->status)->toBe(PaymentStatus::Pending)
        ->and($intent->reference)->toBe('pi_123');

    Http::assertSent(fn ($request) => $request['amount'] === 100_000 && $request['currency'] === 'kes');
});

test('a succeeded webhook marks the matching pending payment successful', function () {
    $payment = Payment::factory()->create([
        'provider' => PaymentProvider::Stripe,
        'provider_reference' => 'pi_456',
        'status' => PaymentStatus::Pending,
    ]);

    $request = Request::create('/webhook', 'POST', [
        'type' => 'payment_intent.succeeded',
        'data' => ['object' => ['id' => 'pi_456']],
    ]);

    (new StripeGateway)->handleWebhook($request);

    expect($payment->fresh()->status)->toBe(PaymentStatus::Successful)
        ->and($payment->fresh()->paid_at)->not->toBeNull();
});

test('a failed webhook marks the matching pending payment failed', function () {
    $payment = Payment::factory()->create([
        'provider' => PaymentProvider::Stripe,
        'provider_reference' => 'pi_789',
        'status' => PaymentStatus::Pending,
    ]);

    $request = Request::create('/webhook', 'POST', [
        'type' => 'payment_intent.payment_failed',
        'data' => ['object' => ['id' => 'pi_789']],
    ]);

    (new StripeGateway)->handleWebhook($request);

    expect($payment->fresh()->status)->toBe(PaymentStatus::Failed);
});

test('a webhook for an unknown payment intent is a no-op', function () {
    $payment = Payment::factory()->create([
        'provider' => PaymentProvider::Stripe,
        'provider_reference' => 'pi_real',
        'status' => PaymentStatus::Pending,
    ]);

    $request = Request::create('/webhook', 'POST', [
        'type' => 'payment_intent.succeeded',
        'data' => ['object' => ['id' => 'pi_does_not_exist']],
    ]);

    (new StripeGateway)->handleWebhook($request);

    expect($payment->fresh()->status)->toBe(PaymentStatus::Pending);
});

test('a webhook for an already-processed payment does not reprocess it', function () {
    $payment = Payment::factory()->create([
        'provider' => PaymentProvider::Stripe,
        'provider_reference' => 'pi_already_done',
        'status' => PaymentStatus::Successful,
        'paid_at' => now()->subDay(),
    ]);
    $originalPaidAt = $payment->paid_at;

    $request = Request::create('/webhook', 'POST', [
        'type' => 'payment_intent.payment_failed',
        'data' => ['object' => ['id' => 'pi_already_done']],
    ]);

    (new StripeGateway)->handleWebhook($request);

    expect($payment->fresh()->status)->toBe(PaymentStatus::Successful)
        ->and($payment->fresh()->paid_at->eq($originalPaidAt))->toBeTrue();
});

test('a malformed webhook payload without an intent id is a no-op', function () {
    $payment = Payment::factory()->create([
        'provider' => PaymentProvider::Stripe,
        'provider_reference' => 'pi_real',
        'status' => PaymentStatus::Pending,
    ]);

    $request = Request::create('/webhook', 'POST', ['type' => 'payment_intent.succeeded']);

    (new StripeGateway)->handleWebhook($request);

    expect($payment->fresh()->status)->toBe(PaymentStatus::Pending);
});
