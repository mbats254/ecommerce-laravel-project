<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

/**
 * Generates human-friendly, sequential order numbers ("AT10452") using an
 * atomic Redis increment rather than a second auto-increment column — MySQL
 * only allows one AUTO_INCREMENT column per table, and that's already the
 * ulid-generating primary key.
 */
class OrderNumberGenerator
{
    private const CACHE_KEY = 'orders.sequence';

    private const STARTING_SEQUENCE = 10_000;

    public function generate(): string
    {
        Cache::add(self::CACHE_KEY, self::STARTING_SEQUENCE);

        return 'AT'.Cache::increment(self::CACHE_KEY);
    }
}
