<?php

namespace App\Actions\Marketing;

use App\Models\Product;
use App\Models\User;

class ToggleWishlistAction
{
    /**
     * @return bool true if the product is now on the wishlist, false if it was removed.
     */
    public function handle(User $user, Product $product): bool
    {
        $existing = $user->wishlist()->where('product_id', $product->id)->first();

        if ($existing !== null) {
            $existing->delete();

            return false;
        }

        $user->wishlist()->create(['product_id' => $product->id]);

        return true;
    }
}
