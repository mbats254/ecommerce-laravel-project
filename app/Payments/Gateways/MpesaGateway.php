<?php

namespace App\Payments\Gateways;

use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Models\Payment;
use App\Payments\PaymentGatewayContract;
use App\Payments\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Thin Safaricom Daraja HTTP client: STK push + callback handling. Two
 * calls, full control, no dependency on a third-party wrapper's release
 * cadence.
 */
class MpesaGateway implements PaymentGatewayContract
{
    public function initiate(Order $order): PaymentIntent
    {
        // The order is created pending; the actual STK push happens via a
        // separate call once the customer's phone number is known (see
        // pushStk()) — checkout's payload has no phone field.
        return new PaymentIntent(status: PaymentStatus::Pending);
    }

    public function pushStk(Order $order, string $phone): void
    {
        $timestamp = now()->format('YmdHis');
        $shortcode = config('services.mpesa.shortcode');
        $password = base64_encode($shortcode.config('services.mpesa.passkey').$timestamp);

        $response = Http::withToken($this->getAccessToken())
            ->baseUrl(config('services.mpesa.base_url'))
            ->post('/mpesa/stkpush/v1/processrequest', [
                'BusinessShortCode' => $shortcode,
                'Password' => $password,
                'Timestamp' => $timestamp,
                'TransactionType' => 'CustomerPayBillOnline',
                'Amount' => (int) $order->total,
                'PartyA' => $phone,
                'PartyB' => $shortcode,
                'PhoneNumber' => $phone,
                'CallBackURL' => config('services.mpesa.callback_url'),
                'AccountReference' => $order->order_number,
                'TransactionDesc' => "Payment for order {$order->order_number}",
            ])
            ->throw()
            ->json();

        $order->payments()
            ->where('status', PaymentStatus::Pending)
            ->latest()
            ->first()
            ?->update(['provider_reference' => $response['CheckoutRequestID']]);
    }

    private function getAccessToken(): string
    {
        return Http::withBasicAuth(
            config('services.mpesa.consumer_key'),
            config('services.mpesa.consumer_secret'),
        )
            ->baseUrl(config('services.mpesa.base_url'))
            ->get('/oauth/v1/generate', ['grant_type' => 'client_credentials'])
            ->throw()
            ->json('access_token');
    }

    public function handleWebhook(Request $request): void
    {
        $callback = $request->input('Body.stkCallback');

        if (! is_array($callback) || ! isset($callback['CheckoutRequestID'])) {
            Log::warning('Malformed M-Pesa callback payload', ['payload' => $request->all()]);

            return;
        }

        $payment = Payment::query()
            ->where('provider', 'mpesa')
            ->where('provider_reference', $callback['CheckoutRequestID'])
            ->first();

        if ($payment === null || $payment->status !== PaymentStatus::Pending) {
            // Unknown checkout request, or already processed — idempotent no-op.
            return;
        }

        if ((int) ($callback['ResultCode'] ?? -1) !== 0) {
            $payment->update(['status' => PaymentStatus::Failed]);

            return;
        }

        $rawItems = $callback['CallbackMetadata']['Item'] ?? null;
        $items = is_array($rawItems) ? $rawItems : [];
        $metadata = collect($items)->pluck('Value', 'Name');

        $payment->update([
            'provider_reference' => (string) $metadata->get('MpesaReceiptNumber', $payment->provider_reference),
            'status' => PaymentStatus::Successful,
            'paid_at' => now(),
        ]);
    }
}
