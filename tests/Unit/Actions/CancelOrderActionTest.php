<?php

use App\Actions\Order\CancelOrderAction;
use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;

uses(RefreshDatabase::class);

test('a pending order can be cancelled', function () {
    $order = Order::factory()->create(['status' => OrderStatus::Pending]);

    $cancelled = app(CancelOrderAction::class)->handle($order);

    expect($cancelled->status)->toBe(OrderStatus::Cancelled);
});

test('a processing order can still be cancelled', function () {
    $order = Order::factory()->create(['status' => OrderStatus::Processing]);

    $cancelled = app(CancelOrderAction::class)->handle($order);

    expect($cancelled->status)->toBe(OrderStatus::Cancelled);
});

test('a shipped order can no longer be cancelled', function () {
    $order = Order::factory()->create(['status' => OrderStatus::Shipped]);

    expect(fn () => app(CancelOrderAction::class)->handle($order))
        ->toThrow(ValidationException::class);

    expect($order->fresh()->status)->toBe(OrderStatus::Shipped);
});

test('a delivered order can no longer be cancelled', function () {
    $order = Order::factory()->create(['status' => OrderStatus::Delivered]);

    expect(fn () => app(CancelOrderAction::class)->handle($order))
        ->toThrow(ValidationException::class);
});
