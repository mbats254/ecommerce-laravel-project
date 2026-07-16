<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ReviewCollection;
use App\Models\Product;
use App\Support\FlatQueryFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class ProductController extends Controller
{
    public function index(Request $request): ProductCollection
    {
        FlatQueryFilters::merge($request, ['categorySlug', 'brandSlugs', 'priceMin', 'priceMax', 'query']);

        $products = QueryBuilder::for(Product::query()->active())
            ->allowedFilters(
                AllowedFilter::scope('categorySlug'),
                AllowedFilter::scope('brandSlugs'),
                AllowedFilter::scope('priceMin'),
                AllowedFilter::scope('priceMax'),
                AllowedFilter::scope('query', 'searchQuery'),
            )
            ->tap(fn (Builder $query) => $this->applySort($query, $request->string('sort')->toString()))
            ->with(['category', 'brand', 'images', 'inventoryItems'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new ProductCollection($products);
    }

    public function show(string $slug): ProductResource
    {
        $product = Product::query()
            ->active()
            ->where('slug', $slug)
            ->with(['category', 'brand', 'images', 'specifications', 'inventoryItems'])
            ->firstOrFail();

        return new ProductResource($product);
    }

    public function reviews(string $slug): ReviewCollection
    {
        $product = Product::query()->active()->where('slug', $slug)->firstOrFail();

        $reviews = $product->reviews()
            ->approved()
            ->with('user')
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return new ReviewCollection($reviews);
    }

    /**
     * @param  Builder<Product>  $query
     */
    private function applySort(Builder $query, string $sort): void
    {
        match ($sort) {
            'price_asc' => $query->orderBy('price'),
            'price_desc' => $query->orderByDesc('price'),
            'name_asc' => $query->orderBy('name'),
            'name_desc' => $query->orderByDesc('name'),
            default => $query->orderByDesc('created_at'),
        };
    }
}
