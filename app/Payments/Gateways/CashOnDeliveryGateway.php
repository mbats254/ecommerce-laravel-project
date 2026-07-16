<?php

namespace App\Payments\Gateways;

use App\Enums\PaymentStatus;
use App\Models\Order;
use App\Payments\PaymentGatewayContract;
use App\Payments\PaymentIntent;
use Illuminate\Http\Request;

class CashOnDeliveryGateway implements PaymentGatewayContract
{
    public function initiate(Order $order): PaymentIntent
    {
        return new PaymentIntent(status: PaymentStatus::Pending);
    }

    public function handleWebhook(Request $request): void
    {
        // Cash on delivery has no external provider to call back — payment
        // is confirmed manually when the order is marked delivered (Phase 4).
    }
}
