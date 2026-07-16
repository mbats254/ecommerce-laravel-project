<?php

namespace App\Exceptions;

use App\Enums\OrderStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use RuntimeException;

class InvalidOrderTransitionException extends RuntimeException
{
    public static function make(OrderStatus $from, OrderStatus $to): self
    {
        return new self("Cannot transition an order from \"{$from->value}\" to \"{$to->value}\".");
    }

    public function render(Request $request): JsonResponse
    {
        return response()->json([
            'message' => $this->getMessage(),
            'errors' => ['status' => [$this->getMessage()]],
        ], 422);
    }
}
