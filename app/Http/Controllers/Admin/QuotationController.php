<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Crm\CreateQuotationAction;
use App\Actions\Crm\UpdateQuotationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreQuotationRequest;
use App\Http\Requests\Admin\UpdateQuotationRequest;
use App\Http\Resources\Admin\QuotationCollection;
use App\Http\Resources\Admin\QuotationResource;
use App\Models\Quotation;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class QuotationController extends Controller
{
    public function index(Request $request): QuotationCollection
    {
        $this->authorize('customers.manage');

        FlatQueryFilters::merge($request, ['status']);

        $quotations = QueryBuilder::for(Quotation::query())
            ->allowedFilters(AllowedFilter::exact('status'))
            ->allowedSorts('created_at', 'total')
            ->defaultSort('-created_at')
            ->with(['customer', 'items.product'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new QuotationCollection($quotations);
    }

    public function store(StoreQuotationRequest $request, CreateQuotationAction $action): QuotationResource
    {
        $quotation = $action->handle($request->validated());

        return new QuotationResource($quotation->load(['customer', 'items.product']));
    }

    public function update(UpdateQuotationRequest $request, Quotation $quotation, UpdateQuotationAction $action): QuotationResource
    {
        $quotation = $action->handle($quotation, $request->validated());

        return new QuotationResource($quotation->load(['customer', 'items.product']));
    }
}
