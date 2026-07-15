<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\CreateCategoryAction;
use App\Actions\Catalog\UpdateCategoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $this->authorize('products.manage');

        if ($request->string('format')->toString() === 'tree') {
            $categories = Category::query()
                ->whereNull('parent_id')
                ->with('children.children')
                ->orderBy('position')
                ->get();

            return CategoryResource::collection($categories);
        }

        return CategoryResource::collection(
            Category::query()->orderBy('position')->get()
        );
    }

    public function store(StoreCategoryRequest $request, CreateCategoryAction $action): CategoryResource
    {
        return new CategoryResource($action->handle($request->validated()));
    }

    public function update(UpdateCategoryRequest $request, Category $category, UpdateCategoryAction $action): CategoryResource
    {
        return new CategoryResource($action->handle($category, $request->validated()));
    }

    public function destroy(Category $category): Response
    {
        $this->authorize('products.manage');

        $category->delete();

        return response()->noContent();
    }
}
