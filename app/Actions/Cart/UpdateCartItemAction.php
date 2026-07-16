<?php

namespace App\Actions\Cart;

use App\Models\CartItem;

class UpdateCartItemAction
{
    public function handle(CartItem $item, int $quantity): CartItem
    {
        $item->update(['quantity' => $quantity]);

        return $item->refresh();
    }
}
