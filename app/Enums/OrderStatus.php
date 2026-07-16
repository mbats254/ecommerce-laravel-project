<?php

namespace App\Enums;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
enum OrderStatus: string
{
    case Pending = 'pending';
    case Processing = 'processing';
    case Packing = 'packing';
    case Shipped = 'shipped';
    case Delivered = 'delivered';
    case Cancelled = 'cancelled';
    case Refunded = 'refunded';
}
