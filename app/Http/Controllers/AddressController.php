<?php

namespace App\Http\Controllers;

use App\Actions\Address\CreateAddressAction;
use App\Actions\Address\UpdateAddressAction;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        return AddressResource::collection($request->user()->addresses()->latest()->get());
    }

    public function store(StoreAddressRequest $request, CreateAddressAction $action): AddressResource
    {
        $address = $action->handle($request->user(), $request->validated());

        return new AddressResource($address);
    }

    public function update(UpdateAddressRequest $request, Address $address, UpdateAddressAction $action): AddressResource
    {
        $address = $action->handle($address, $request->validated());

        return new AddressResource($address);
    }

    public function destroy(Request $request, Address $address): Response
    {
        $this->authorize('delete', $address);

        $address->delete();

        return response()->noContent();
    }
}
