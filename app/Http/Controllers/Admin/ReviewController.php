<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Catalog\ModerateReviewAction;
use App\Enums\ReviewStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateReviewRequest;
use App\Http\Resources\Admin\ReviewCollection;
use App\Http\Resources\Admin\ReviewResource;
use App\Models\Review;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ReviewController extends Controller
{
    public function index(Request $request): ReviewCollection
    {
        $this->authorize('marketing.manage');

        FlatQueryFilters::merge($request, ['status', 'product_id']);

        $reviews = QueryBuilder::for(Review::query())
            ->allowedFilters('status', AllowedFilter::exact('product_id'))
            ->allowedSorts('created_at', 'rating')
            ->defaultSort('-created_at')
            ->with(['product', 'user'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new ReviewCollection($reviews);
    }

    public function update(UpdateReviewRequest $request, Review $review, ModerateReviewAction $action): ReviewResource
    {
        $status = ReviewStatus::from($request->validated('status'));

        return new ReviewResource($action->handle($review, $status)->load(['product', 'user']));
    }
}
