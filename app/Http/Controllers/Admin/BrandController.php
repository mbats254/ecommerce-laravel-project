<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\CreateBrandAction;
use App\Actions\Catalog\UpdateBrandAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBrandRequest;
use App\Http\Requests\Admin\UpdateBrandRequest;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class BrandController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $this->authorize('products.manage');

        return BrandResource::collection(
            Brand::query()->orderBy('name')->get()
        );
    }

    public function store(StoreBrandRequest $request, CreateBrandAction $action): BrandResource
    {
        return new BrandResource($action->handle($request->validated()));
    }

    public function update(UpdateBrandRequest $request, Brand $brand, UpdateBrandAction $action): BrandResource
    {
        return new BrandResource($action->handle($brand, $request->validated()));
    }

    public function destroy(Brand $brand): Response
    {
        $this->authorize('products.manage');

        $brand->delete();

        return response()->noContent();
    }
}
