<?php

namespace App\Payments\Gateways;

use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Models\Payment;
use App\Payments\PaymentGatewayContract;
use App\Payments\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StripeGateway implements PaymentGatewayContract
{
    public function initiate(Order $order): PaymentIntent
    {
        $response = Http::withToken(config('services.stripe.secret'))
            ->asForm()
            ->baseUrl('https://api.stripe.com/v1')
            ->post('payment_intents', [
                'amount' => (int) round($order->total * 100),
                'currency' => 'kes',
                'metadata' => ['order_number' => $order->order_number],
            ])
            ->throw()
            ->json();

        return new PaymentIntent(status: PaymentStatus::Pending, reference: $response['id']);
    }

    public function handleWebhook(Request $request): void
    {
        $type = $request->input('type');
        $intent = $request->input('data.object', []);

        if (! is_array($intent) || ! isset($intent['id'])) {
            return;
        }

        $payment = Payment::query()
            ->where('provider', 'stripe')
            ->where('provider_reference', $intent['id'])
            ->first();

        if ($payment === null || $payment->status !== PaymentStatus::Pending) {
            return;
        }

        match ($type) {
            'payment_intent.succeeded' => $payment->update([
                'status' => PaymentStatus::Successful,
                'paid_at' => now(),
            ]),
            'payment_intent.payment_failed' => $payment->update(['status' => PaymentStatus::Failed]),
            default => null,
        };
    }
}
