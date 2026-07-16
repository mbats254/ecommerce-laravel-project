<?php

use App\Models\Address;
use App\Models\Order;
use App\Models\User;
use App\Services\ReportsService;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Support\Facades\Cache;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Administrator');
});

test('the dashboard endpoint returns KPI tiles and orders-by-status data', function () {
    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $customer = User::factory()->create();
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ]);

    $response = $this->actingAs($this->admin)->getJson('/api/v1/admin/dashboard');

    $response->assertOk()->assertJsonStructure(['totalSales', 'totalOrders', 'totalCustomers', 'ordersByStatus']);
    expect($response->json('totalOrders'))->toBe(1);
});

test('the dashboard response is served from cache on the second call within its TTL', function () {
    Order::factory()->create();

    $first = $this->actingAs($this->admin)->getJson('/api/v1/admin/dashboard')->json('totalOrders');

    // A new order is placed directly (bypassing the event that would flush the cache).
    Order::factory()->create();

    $second = $this->actingAs($this->admin)->getJson('/api/v1/admin/dashboard')->json('totalOrders');

    expect($second)->toBe($first);
});

test('placing an order invalidates the cached dashboard summary', function () {
    app(ReportsService::class)->dashboard();
    expect(Cache::has(ReportsService::DASHBOARD_CACHE_KEY))->toBeTrue();

    $product = createInStockProduct(['price' => 1000], quantity: 10);
    $customer = User::factory()->create();
    $address = Address::factory()->for($customer)->create();

    $this->actingAs($customer)->postJson('/api/v1/cart/items', ['productId' => $product->id, 'quantity' => 1]);
    $this->actingAs($customer)->postJson('/api/v1/checkout', [
        'shippingAddressId' => $address->id,
        'deliveryMethod' => 'standard',
        'paymentMethod' => 'cash_on_delivery',
    ]);

    expect(Cache::has(ReportsService::DASHBOARD_CACHE_KEY))->toBeFalse();
});

test('the sales report supports CSV export', function () {
    Order::factory()->create(['placed_at' => now()]);

    $response = $this->actingAs($this->admin)->get('/api/v1/admin/reports/sales?export=csv');

    $response->assertOk();
    expect($response->headers->get('Content-Type'))->toContain('text/csv');
});

test('the products and customers reports return structured data', function () {
    Order::factory()->create();

    $this->actingAs($this->admin)->getJson('/api/v1/admin/reports/products')->assertOk();
    $this->actingAs($this->admin)->getJson('/api/v1/admin/reports/customers')->assertOk();
});

test('a user with no admin role cannot view reports', function () {
    $customer = User::factory()->create();

    $this->actingAs($customer)->getJson('/api/v1/admin/dashboard')->assertForbidden();
});
