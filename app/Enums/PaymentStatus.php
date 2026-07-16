<?php

namespace App\Enums;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
enum PaymentStatus: string
{
    case Pending = 'pending';
    case Successful = 'successful';
    case Failed = 'failed';
}
