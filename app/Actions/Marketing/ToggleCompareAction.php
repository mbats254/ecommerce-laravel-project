<?php

namespace App\Actions\Marketing;

use App\Models\Product;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class ToggleCompareAction
{
    /**
     * Mirrors the frontend's COMPARE_LIMIT — at most 4 products may be
     * compared at once.
     */
    private const COMPARE_LIMIT = 4;

    /**
     * @return bool true if the product is now in the compare list, false if it was removed.
     */
    public function handle(User $user, Product $product): bool
    {
        $existing = $user->compareList()->where('product_id', $product->id)->first();

        if ($existing !== null) {
            $existing->delete();

            return false;
        }

        if ($user->compareList()->count() >= self::COMPARE_LIMIT) {
            throw ValidationException::withMessages([
                'productId' => ['You can only compare up to '.self::COMPARE_LIMIT.' products at a time.'],
            ]);
        }

        $user->compareList()->create(['product_id' => $product->id]);

        return true;
    }
}
