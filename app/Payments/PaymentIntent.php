<?php

namespace App\Payments;

use App\Enums\PaymentStatus;

/**
 * The immediate result of initiating a payment. For asynchronous providers
 * (M-Pesa) this reflects "STK push sent", not "money received" — status
 * only flips to Successful once the webhook confirms it.
 */
final readonly class PaymentIntent
{
    public function __construct(
        public PaymentStatus $status,
        public ?string $reference = null,
    ) {}
}
