<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Crm\CreateLeadAction;
use App\Actions\Crm\UpdateLeadAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreLeadRequest;
use App\Http\Requests\Admin\UpdateLeadRequest;
use App\Http\Resources\Admin\LeadCollection;
use App\Http\Resources\Admin\LeadResource;
use App\Models\Lead;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class LeadController extends Controller
{
    public function index(Request $request): LeadCollection
    {
        $this->authorize('customers.manage');

        FlatQueryFilters::merge($request, ['status']);

        $leads = QueryBuilder::for(Lead::query())
            ->allowedFilters(AllowedFilter::exact('status'))
            ->allowedSorts('contact_name', 'created_at')
            ->defaultSort('-created_at')
            ->with('assignee')
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new LeadCollection($leads);
    }

    public function store(StoreLeadRequest $request, CreateLeadAction $action): LeadResource
    {
        return new LeadResource($action->handle($request->validated())->load('assignee'));
    }

    public function update(UpdateLeadRequest $request, Lead $lead, UpdateLeadAction $action): LeadResource
    {
        return new LeadResource($action->handle($lead, $request->validated())->load('assignee'));
    }
}
