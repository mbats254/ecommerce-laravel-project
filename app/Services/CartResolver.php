<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Finds or creates the cart for the current request — the user's cart if
 * authenticated, otherwise a session-keyed guest cart. The one place that
 * decides "which cart is this request talking about".
 */
class CartResolver
{
    public function resolve(Request $request): Cart
    {
        $user = $request->user();

        if ($user instanceof User) {
            return Cart::query()->firstOrCreate(['user_id' => $user->id]);
        }

        return Cart::query()->firstOrCreate([
            'session_id' => $request->session()->getId(),
            'user_id' => null,
        ]);
    }
}
