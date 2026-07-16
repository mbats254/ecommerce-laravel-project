<?php

use App\Models\Address;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Http;

function placeMpesaOrder(User $user): array
{
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($user)->create();

    test()->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);

    return test()->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'mpesa',
    ])->json();
}

test('an stk push request records the checkout request id against the pending payment', function () {
    Http::fake([
        '*/oauth/v1/generate*' => Http::response(['access_token' => 'test-token']),
        '*/mpesa/stkpush/v1/processrequest' => Http::response(['CheckoutRequestID' => 'ws_CO_123']),
    ]);

    $user = User::factory()->create();
    $order = placeMpesaOrder($user);

    $response = $this->actingAs($user)->postJson('/api/v1/payments/mpesa/stk-push', [
        'orderId' => $order['id'],
        'phone' => '254712345678',
    ]);

    $response->assertNoContent();
    $this->assertDatabaseHas('payments', [
        'order_id' => $order['id'],
        'provider_reference' => 'ws_CO_123',
        'status' => 'pending',
    ]);
});

test('a successful mpesa callback marks the payment as successful, idempotently', function () {
    $user = User::factory()->create();
    $order = placeMpesaOrder($user);

    Payment::query()->where('order_id', $order['id'])->update(['provider_reference' => 'ws_CO_456']);

    $callbackPayload = [
        'Body' => [
            'stkCallback' => [
                'CheckoutRequestID' => 'ws_CO_456',
                'ResultCode' => 0,
                'ResultDesc' => 'Success',
                'CallbackMetadata' => [
                    'Item' => [
                        ['Name' => 'Amount', 'Value' => 1000],
                        ['Name' => 'MpesaReceiptNumber', 'Value' => 'NLJ7RT61SV'],
                    ],
                ],
            ],
        ],
    ];

    $this->postJson('/api/v1/payments/mpesa/callback', $callbackPayload)->assertNoContent();

    $this->assertDatabaseHas('payments', [
        'order_id' => $order['id'],
        'provider_reference' => 'NLJ7RT61SV',
        'status' => 'successful',
    ]);

    // Redelivering the same callback must not error or double-process.
    $this->postJson('/api/v1/payments/mpesa/callback', $callbackPayload)->assertNoContent();
    $this->assertDatabaseCount('payments', 1);
});

test('a failed mpesa callback marks the payment as failed', function () {
    $user = User::factory()->create();
    $order = placeMpesaOrder($user);

    Payment::query()->where('order_id', $order['id'])->update(['provider_reference' => 'ws_CO_789']);

    $this->postJson('/api/v1/payments/mpesa/callback', [
        'Body' => [
            'stkCallback' => [
                'CheckoutRequestID' => 'ws_CO_789',
                'ResultCode' => 1032,
                'ResultDesc' => 'Request cancelled by user',
            ],
        ],
    ])->assertNoContent();

    $this->assertDatabaseHas('payments', ['order_id' => $order['id'], 'status' => 'failed']);
});

test('stk push cannot be initiated for another users order', function () {
    $owner = User::factory()->create();
    $stranger = User::factory()->create();
    $order = placeMpesaOrder($owner);

    $this->actingAs($stranger)->postJson('/api/v1/payments/mpesa/stk-push', [
        'orderId' => $order['id'],
        'phone' => '254712345678',
    ])->assertUnprocessable()->assertJsonValidationErrors('orderId');
});
