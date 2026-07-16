<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Delivery Fees
    |--------------------------------------------------------------------------
    |
    | Flat KES fee per delivery method, keyed by the `deliveryMethod` value
    | the checkout payload sends. "standard" is used whenever an unknown or
    | omitted method is provided.
    |
    */

    'delivery_fees' => [
        'standard' => env('DELIVERY_FEE_STANDARD', 300),
        'express' => env('DELIVERY_FEE_EXPRESS', 800),
    ],

    /*
    |--------------------------------------------------------------------------
    | VAT Rate
    |--------------------------------------------------------------------------
    |
    | Kenya's standard VAT rate, applied to the discounted order subtotal.
    |
    */

    'vat_rate' => env('VAT_RATE', 0.16),
];
