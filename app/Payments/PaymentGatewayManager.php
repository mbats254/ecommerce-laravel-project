<?php

namespace App\Payments;

use App\Payments\Gateways\CashOnDeliveryGateway;
use App\Payments\Gateways\MpesaGateway;
use App\Payments\Gateways\StripeGateway;
use Illuminate\Support\Manager;

/**
 * Resolves the correct gateway from an order's payment_method, the same
 * pattern Laravel itself uses for Cache/Queue drivers. Switching card
 * processors later is one new class + one new "create*Driver" method —
 * zero changes to any Action or Controller that calls this manager.
 */
class PaymentGatewayManager extends Manager
{
    public function getDefaultDriver(): string
    {
        return 'cash_on_delivery';
    }

    public function createMpesaDriver(): MpesaGateway
    {
        return $this->container->make(MpesaGateway::class);
    }

    public function createCardDriver(): StripeGateway
    {
        return $this->container->make(StripeGateway::class);
    }

    public function createCashOnDeliveryDriver(): CashOnDeliveryGateway
    {
        return $this->container->make(CashOnDeliveryGateway::class);
    }
}
