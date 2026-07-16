<?php

use App\Actions\Order\TransitionOrderStatusAction;
use App\Enums\OrderStatus;
use App\Events\OrderStatusChanged;
use App\Exceptions\InvalidOrderTransitionException;
use App\Models\InventoryItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;

uses(RefreshDatabase::class);

test('a legal transition updates the status, writes history, and dispatches the event with the previous status', function () {
    Event::fake([OrderStatusChanged::class]);
    $order = Order::factory()->create(['status' => OrderStatus::Pending]);

    $updated = (new TransitionOrderStatusAction)->handle($order, OrderStatus::Processing);

    expect($updated->status)->toBe(OrderStatus::Processing)
        ->and($updated->statusHistory()->count())->toBe(1);

    Event::assertDispatched(
        OrderStatusChanged::class,
        fn (OrderStatusChanged $event) => $event->previousStatus === OrderStatus::Pending
            && $event->order->status === OrderStatus::Processing
    );
});

test('skipping ahead in the state machine is rejected without touching history or dispatching an event', function () {
    Event::fake([OrderStatusChanged::class]);
    $order = Order::factory()->create(['status' => OrderStatus::Pending]);

    expect(fn () => (new TransitionOrderStatusAction)->handle($order, OrderStatus::Shipped))
        ->toThrow(InvalidOrderTransitionException::class);

    expect($order->fresh()->status)->toBe(OrderStatus::Pending)
        ->and($order->fresh()->statusHistory()->count())->toBe(0);

    Event::assertNotDispatched(OrderStatusChanged::class);
});

test('cancelled and refunded are terminal — nothing transitions out of them', function () {
    $cancelled = Order::factory()->create(['status' => OrderStatus::Cancelled]);
    $refunded = Order::factory()->create(['status' => OrderStatus::Refunded]);

    expect(fn () => (new TransitionOrderStatusAction)->handle($cancelled, OrderStatus::Processing))
        ->toThrow(InvalidOrderTransitionException::class);

    expect(fn () => (new TransitionOrderStatusAction)->handle($refunded, OrderStatus::Delivered))
        ->toThrow(InvalidOrderTransitionException::class);
});

test('cancelling restocks every item on the order', function () {
    $order = Order::factory()->create(['status' => OrderStatus::Pending]);
    $item = OrderItem::factory()->for($order)->create(['quantity' => 3]);
    $inventory = InventoryItem::factory()->for($item->product)->create(['quantity' => 5]);

    (new TransitionOrderStatusAction)->handle($order, OrderStatus::Cancelled);

    expect($inventory->fresh()->quantity)->toBe(8);
});
