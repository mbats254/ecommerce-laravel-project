<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Inventory\CreateWarehouseAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreWarehouseRequest;
use App\Http\Resources\Admin\WarehouseResource;
use App\Models\Warehouse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WarehouseController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $this->authorize('products.manage');

        return WarehouseResource::collection(
            Warehouse::query()->orderBy('name')->get()
        );
    }

    public function store(StoreWarehouseRequest $request, CreateWarehouseAction $action): WarehouseResource
    {
        return new WarehouseResource($action->handle($request->validated()));
    }
}
