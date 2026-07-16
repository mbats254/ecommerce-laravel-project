<?php

namespace App\Enums;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
enum PaymentProvider: string
{
    case Mpesa = 'mpesa';
    case Stripe = 'stripe';
    case Cash = 'cash';
}
