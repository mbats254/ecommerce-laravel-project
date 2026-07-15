<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FlashDealController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $products = Product::query()
            ->active()
            ->where('is_flash_deal', true)
            ->where('flash_deal_ends_at', '>', now())
            ->with(['category', 'brand', 'images', 'inventoryItems'])
            ->orderBy('flash_deal_ends_at')
            ->get();

        return ProductResource::collection($products);
    }
}
