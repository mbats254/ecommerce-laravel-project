<?php

namespace App\Http\Controllers;

use App\Actions\Marketing\ToggleWishlistAction;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WishlistController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $products = Product::query()
            ->whereHas('wishlist', fn ($query) => $query->where('user_id', $request->user()->id))
            ->with(['category', 'brand', 'images', 'inventoryItems'])
            ->get();

        return ProductResource::collection($products);
    }

    public function toggle(Request $request, Product $product, ToggleWishlistAction $action): JsonResponse
    {
        $inWishlist = $action->handle($request->user(), $product);

        return response()->json(['productId' => $product->id, 'inWishlist' => $inWishlist]);
    }
}
