<?php

namespace App\Services;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Collection;

/**
 * The one authoritative place subtotal/delivery/VAT/discount/total are
 * computed. The frontend's `lib/pricing.ts` is a client-side preview for
 * optimistic UI only — this is the only source ever trusted for what a
 * customer is actually charged.
 */
class PricingService
{
    /**
     * @param  Collection<int, CartItem>  $items
     * @return array{subtotal: float, deliveryFee: float, discount: float, vat: float, total: float}
     */
    public function calculate(Collection $items, float $discount = 0, string $deliveryMethod = 'standard'): array
    {
        $subtotal = round((float) $items->sum(fn ($item) => $item->unit_price * $item->quantity), 2);
        $deliveryFee = $this->deliveryFeeFor($deliveryMethod);
        $discountedSubtotal = max($subtotal - $discount, 0);
        $vat = round($discountedSubtotal * (float) config('shipping.vat_rate'), 2);
        $total = round($discountedSubtotal + $deliveryFee + $vat, 2);

        return [
            'subtotal' => $subtotal,
            'deliveryFee' => $deliveryFee,
            'discount' => $discount,
            'vat' => $vat,
            'total' => $total,
        ];
    }

    private function deliveryFeeFor(string $method): float
    {
        return (float) (config("shipping.delivery_fees.{$method}") ?? config('shipping.delivery_fees.standard'));
    }
}
