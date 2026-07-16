<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Inventory\AdjustInventoryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateInventoryRequest;
use App\Http\Resources\Admin\InventoryItemCollection;
use App\Http\Resources\Admin\InventoryItemResource;
use App\Models\InventoryItem;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class InventoryController extends Controller
{
    public function index(Request $request): InventoryItemCollection
    {
        $this->authorize('products.manage');

        FlatQueryFilters::merge($request, ['warehouseId', 'productId', 'lowStock']);

        $items = QueryBuilder::for(InventoryItem::query())
            ->allowedFilters(
                AllowedFilter::exact('warehouseId', 'warehouse_id'),
                AllowedFilter::exact('productId', 'product_id'),
                AllowedFilter::scope('lowStock'),
            )
            ->with(['product', 'warehouse'])
            ->paginate($request->integer('perPage', 15))
            ->withQueryString();

        return new InventoryItemCollection($items);
    }

    public function update(UpdateInventoryRequest $request, InventoryItem $inventory, AdjustInventoryAction $action): InventoryItemResource
    {
        $item = $action->handle($inventory, $request->validated('quantity'), $request->validated('reason'));

        return new InventoryItemResource($item->load(['product', 'warehouse']));
    }
}
