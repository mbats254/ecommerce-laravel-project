<?php

use App\Models\Address;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\User;
use App\Notifications\LowStockAlertNotification;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Notification;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
});

test('placing an order that drops a product to its low stock threshold alerts every admin who manages products', function () {
    Notification::fake();

    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');
    $salesAdmin = User::factory()->create();
    $salesAdmin->assignRole('Sales & Support');

    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->create(['quantity' => 6, 'low_stock_threshold' => 5]);

    $customer = User::factory()->create();
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->assertCreated();

    Notification::assertSentTo($catalogManager, LowStockAlertNotification::class);
    Notification::assertNotSentTo($salesAdmin, LowStockAlertNotification::class);
});

test('an order that leaves a product comfortably in stock does not alert anyone', function () {
    Notification::fake();

    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    $product = Product::factory()->create();
    InventoryItem::factory()->for($product)->create(['quantity' => 100, 'low_stock_threshold' => 5]);

    $customer = User::factory()->create();
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ])->assertCreated();

    Notification::assertNotSentTo($catalogManager, LowStockAlertNotification::class);
});
