<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Returns\UpdateReturnStatusAction;
use App\Enums\ReturnStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateReturnRequest;
use App\Http\Resources\Admin\ReturnCollection;
use App\Http\Resources\Admin\ReturnResource;
use App\Models\ReturnRequest;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ReturnController extends Controller
{
    public function index(Request $request): ReturnCollection
    {
        $this->authorize('orders.manage');

        FlatQueryFilters::merge($request, ['status']);

        $returns = QueryBuilder::for(ReturnRequest::query())
            ->allowedFilters(AllowedFilter::exact('status'))
            ->allowedSorts('requested_at', 'created_at')
            ->defaultSort('-requested_at')
            ->with(['order', 'orderItem'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new ReturnCollection($returns);
    }

    public function update(UpdateReturnRequest $request, ReturnRequest $return, UpdateReturnStatusAction $action): ReturnResource
    {
        $status = ReturnStatus::from($request->validated('status'));

        $return = $action->handle($return, $status);

        return new ReturnResource($return->load(['order', 'orderItem']));
    }
}
