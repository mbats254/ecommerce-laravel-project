<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SearchController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $request->validate([
            'q' => ['required', 'string', 'min:1', 'max:255'],
        ]);

        $products = Product::search($request->string('q')->toString())
            ->query(fn ($query) => $query->with(['category', 'brand', 'images', 'inventoryItems']))
            ->take(10)
            ->get();

        return ProductResource::collection($products);
    }
}
