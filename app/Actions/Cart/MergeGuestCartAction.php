<?php

namespace App\Actions\Cart;

use App\Models\Cart;
use App\Models\User;

class MergeGuestCartAction
{
    /**
     * Merges a guest session's cart into the just-logged-in user's cart,
     * combining quantities for any product/variant already present.
     */
    public function handle(User $user, string $guestSessionId): void
    {
        $guestCart = Cart::query()
            ->whereNull('user_id')
            ->where('session_id', $guestSessionId)
            ->with('items')
            ->first();

        if ($guestCart === null || $guestCart->items->isEmpty()) {
            return;
        }

        $userCart = Cart::query()->firstOrCreate(['user_id' => $user->id]);

        foreach ($guestCart->items as $guestItem) {
            $existing = $userCart->items()
                ->where('product_id', $guestItem->product_id)
                ->where('variant_id', $guestItem->variant_id)
                ->first();

            if ($existing !== null) {
                $existing->increment('quantity', $guestItem->quantity);
            } else {
                $userCart->items()->create([
                    'product_id' => $guestItem->product_id,
                    'variant_id' => $guestItem->variant_id,
                    'quantity' => $guestItem->quantity,
                    'unit_price' => $guestItem->unit_price,
                ]);
            }
        }

        $guestCart->delete();
    }
}
