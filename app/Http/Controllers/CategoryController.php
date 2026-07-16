<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class CategoryController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $categories = Category::query()
            ->active()
            ->whereNull('parent_id')
            ->with('children.children')
            ->orderBy('position')
            ->get();

        return CategoryResource::collection($categories);
    }

    public function show(string $slug): JsonResponse
    {
        $category = Category::query()
            ->active()
            ->where('slug', $slug)
            ->with(['children', 'parent'])
            ->firstOrFail();

        $breadcrumb = [];
        $ancestor = $category->parent;

        while ($ancestor !== null) {
            array_unshift($breadcrumb, $ancestor);
            $ancestor->loadMissing('parent');
            $ancestor = $ancestor->parent;
        }

        return response()->json([
            ...(new CategoryResource($category))->resolve(),
            'breadcrumb' => CategoryResource::collection(collect($breadcrumb))->resolve(),
        ]);
    }
}
