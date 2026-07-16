<?php

namespace App\Http\Controllers;

use App\Http\Requests\StkPushRequest;
use App\Models\Order;
use App\Payments\Gateways\MpesaGateway;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaymentController extends Controller
{
    public function mpesaStkPush(StkPushRequest $request, MpesaGateway $gateway): Response
    {
        $order = Order::query()->findOrFail($request->validated('orderId'));

        $gateway->pushStk($order, $request->validated('phone'));

        return response()->noContent();
    }

    public function mpesaCallback(Request $request, MpesaGateway $gateway): Response
    {
        $gateway->handleWebhook($request);

        return response()->noContent();
    }
}
