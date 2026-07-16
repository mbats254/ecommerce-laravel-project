<?php

namespace App\Actions\Cart;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Validation\ValidationException;

class AddCartItemAction
{
    /**
     * @param  array{productId: string, variantId?: ?string, quantity: int}  $data
     */
    public function handle(Cart $cart, array $data): CartItem
    {
        $product = Product::query()->active()->findOrFail($data['productId']);

        $variant = null;
        if (! empty($data['variantId'])) {
            $variant = ProductVariant::query()
                ->where('product_id', $product->id)
                ->findOrFail($data['variantId']);
        }

        $existing = $cart->items()
            ->where('product_id', $product->id)
            ->where('variant_id', $variant?->id)
            ->first();

        if ($existing !== null) {
            $existing->increment('quantity', $data['quantity']);

            return $existing->refresh();
        }

        if ($product->stock_status->value === 'out_of_stock') {
            throw ValidationException::withMessages([
                'productId' => ['This product is currently out of stock.'],
            ]);
        }

        return $cart->items()->create([
            'product_id' => $product->id,
            'variant_id' => $variant?->id,
            'quantity' => $data['quantity'],
            'unit_price' => $product->price + ($variant->price_delta ?? 0),
        ]);
    }
}
