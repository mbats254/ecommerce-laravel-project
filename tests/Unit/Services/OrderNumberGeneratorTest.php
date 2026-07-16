<?php

use App\Services\OrderNumberGenerator;

test('the first generated order number starts the sequence at 10001', function () {
    $number = (new OrderNumberGenerator)->generate();

    expect($number)->toBe('AT10001');
});

test('successive calls produce unique, sequentially increasing order numbers', function () {
    $generator = new OrderNumberGenerator;

    $numbers = [$generator->generate(), $generator->generate(), $generator->generate()];

    expect($numbers)->toBe(['AT10001', 'AT10002', 'AT10003'])
        ->and($numbers)->toEqual(array_unique($numbers));
});
