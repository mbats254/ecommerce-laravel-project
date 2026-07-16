<?php

namespace App\Http\Controllers;

use App\Actions\Marketing\ToggleCompareAction;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CompareController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $products = Product::query()
            ->whereHas('compareList', fn ($query) => $query->where('user_id', $request->user()->id))
            ->with(['category', 'brand', 'images', 'specifications', 'inventoryItems'])
            ->get();

        return ProductResource::collection($products);
    }

    public function toggle(Request $request, Product $product, ToggleCompareAction $action): JsonResponse
    {
        $inCompareList = $action->handle($request->user(), $product);

        return response()->json(['productId' => $product->id, 'inCompareList' => $inCompareList]);
    }
}
