<?php

namespace App\Enums;

enum PaymentMethod: string
{
    case Mpesa = 'mpesa';
    case Card = 'card';
    case CashOnDelivery = 'cash_on_delivery';

    public function provider(): PaymentProvider
    {
        return match ($this) {
            self::Mpesa => PaymentProvider::Mpesa,
            self::Card => PaymentProvider::Stripe,
            self::CashOnDelivery => PaymentProvider::Cash,
        };
    }
}
