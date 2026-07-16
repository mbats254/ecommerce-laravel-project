<?php

namespace App\Enums;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
enum CouponType: string
{
    case Percentage = 'percentage';
    case Fixed = 'fixed';
}
