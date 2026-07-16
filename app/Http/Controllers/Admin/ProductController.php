<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\CreateProductAction;
use App\Actions\Catalog\UpdateProductAction;
use App\Actions\Catalog\UploadProductImageAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductImageRequest;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Http\Resources\Admin\ProductCollection;
use App\Http\Resources\Admin\ProductResource;
use App\Http\Resources\ProductImageResource;
use App\Models\Product;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class ProductController extends Controller
{
    public function index(Request $request): ProductCollection
    {
        $this->authorize('products.manage');

        FlatQueryFilters::merge($request, ['status', 'category_id', 'brand_id']);

        $products = QueryBuilder::for(Product::query())
            ->allowedFilters('status', AllowedFilter::exact('category_id'), AllowedFilter::exact('brand_id'))
            ->allowedSorts('name', 'price', 'created_at')
            ->defaultSort('-created_at')
            ->with(['category', 'brand', 'images', 'inventoryItems'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new ProductCollection($products);
    }

    public function store(StoreProductRequest $request, CreateProductAction $action): ProductResource
    {
        $product = $action->handle($request->validated());

        return new ProductResource($product->load(['category', 'brand', 'images', 'specifications', 'inventoryItems']));
    }

    public function show(Product $product): ProductResource
    {
        $this->authorize('products.manage');

        return new ProductResource($product->load(['category', 'brand', 'images', 'specifications', 'inventoryItems']));
    }

    public function update(UpdateProductRequest $request, Product $product, UpdateProductAction $action): ProductResource
    {
        $product = $action->handle($product, $request->validated());

        return new ProductResource($product->load(['category', 'brand', 'images', 'specifications', 'inventoryItems']));
    }

    public function destroy(Product $product): Response
    {
        $this->authorize('products.manage');

        $product->delete();

        return response()->noContent();
    }

    public function storeImage(StoreProductImageRequest $request, Product $product, UploadProductImageAction $action): ProductImageResource
    {
        $image = $action->handle($product, $request->file('image'), $request->safe()->only(['alt', 'position']));

        return new ProductImageResource($image);
    }
}
