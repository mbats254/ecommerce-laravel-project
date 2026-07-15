<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BrandController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return BrandResource::collection(
            Brand::query()->active()->orderBy('name')->get()
        );
    }

    public function show(string $slug): BrandResource
    {
        $brand = Brand::query()->active()->where('slug', $slug)->firstOrFail();

        return new BrandResource($brand);
    }
}
