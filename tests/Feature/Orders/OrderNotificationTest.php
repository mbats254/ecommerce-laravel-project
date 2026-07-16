<?php

use App\Actions\Order\TransitionOrderStatusAction;
use App\Enums\OrderStatus;
use App\Models\Address;
use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderConfirmationNotification;
use App\Notifications\OrderStatusChangedNotification;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Notification;

test('placing an order emails the customer an order confirmation', function () {
    Notification::fake();

    $user = User::factory()->create();
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $address = Address::factory()->for($user)->create();

    $this->actingAs($user)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($user)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->assertCreated();

    Notification::assertSentTo(
        $user,
        OrderConfirmationNotification::class,
        fn (OrderConfirmationNotification $notification) => str_contains(
            implode(' ', $notification->toMail($user)->introLines),
            $user->orders()->first()->order_number
        )
    );
});

test('transitioning an orders status emails the customer', function () {
    Notification::fake();
    $this->seed(RolesAndPermissionsSeeder::class);

    $customer = User::factory()->create();
    $order = Order::factory()->for($customer)->create();

    app(TransitionOrderStatusAction::class)->handle($order, OrderStatus::Processing);

    Notification::assertSentTo($customer, OrderStatusChangedNotification::class);
});
