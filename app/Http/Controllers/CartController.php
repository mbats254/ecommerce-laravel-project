<?php

namespace App\Http\Controllers;

use App\Actions\Cart\AddCartItemAction;
use App\Actions\Cart\UpdateCartItemAction;
use App\Http\Requests\StoreCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Http\Resources\CartItemResource;
use App\Http\Resources\CartResource;
use App\Models\CartItem;
use App\Services\CartResolver;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    public function __construct(private readonly CartResolver $cartResolver) {}

    public function store(Request $request): CartResource
    {
        $cart = $this->cartResolver->resolve($request);

        return new CartResource($cart->load('items.product'));
    }

    public function show(Request $request): CartResource
    {
        $cart = $this->cartResolver->resolve($request);

        return new CartResource($cart->load('items.product'));
    }

    public function storeItem(StoreCartItemRequest $request, AddCartItemAction $action): CartItemResource
    {
        $cart = $this->cartResolver->resolve($request);

        $item = $action->handle($cart, $request->validated());

        return new CartItemResource($item->load('product'));
    }

    public function updateItem(UpdateCartItemRequest $request, CartItem $item, UpdateCartItemAction $action): CartItemResource
    {
        $this->authorizeItemBelongsToCurrentCart($request, $item);

        $item = $action->handle($item, $request->validated('quantity'));

        return new CartItemResource($item->load('product'));
    }

    public function destroyItem(Request $request, CartItem $item): Response
    {
        $this->authorizeItemBelongsToCurrentCart($request, $item);

        $item->delete();

        return response()->noContent();
    }

    private function authorizeItemBelongsToCurrentCart(Request $request, CartItem $item): void
    {
        $cart = $this->cartResolver->resolve($request);

        abort_unless($item->cart_id === $cart->id, 404);
    }
}
