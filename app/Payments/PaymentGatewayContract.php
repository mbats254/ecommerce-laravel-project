<?php

namespace App\Payments;

use App\Models\Order;
use Illuminate\Http\Request;

interface PaymentGatewayContract
{
    public function initiate(Order $order): PaymentIntent;

    public function handleWebhook(Request $request): void;
}
