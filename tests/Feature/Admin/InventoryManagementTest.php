<?php

use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\User;
use App\Models\Warehouse;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Catalog Manager');
});

test('a catalog manager can list and create warehouses', function () {
    Warehouse::factory()->create(['name' => 'Mombasa Depot']);

    $this->actingAs($this->admin)->getJson('/api/v1/admin/warehouses')
        ->assertOk()
        ->assertJsonStructure([['id', 'name', 'location', 'manager', 'isActive']]);

    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/warehouses', [
        'name' => 'Kisumu Depot',
        'location' => 'Kisumu',
        'manager' => 'Jane Doe',
    ]);

    $response->assertCreated()->assertJsonPath('name', 'Kisumu Depot');
});

test('the admin inventory list matches the PaginatedResponse contract and can filter to low stock only', function () {
    $product = Product::factory()->create();
    $warehouse = Warehouse::factory()->create();

    InventoryItem::factory()->for($product)->for($warehouse)->create(['quantity' => 2, 'low_stock_threshold' => 5]);
    InventoryItem::factory()->create(['quantity' => 100, 'low_stock_threshold' => 5]);

    $response = $this->actingAs($this->admin)->getJson('/api/v1/admin/inventory?lowStock=1');

    $response->assertOk()->assertJsonStructure([
        'data' => [['id', 'product' => ['id', 'name', 'sku'], 'warehouse' => ['id', 'name'], 'quantity', 'lowStockThreshold', 'isLowStock']],
        'meta' => ['currentPage', 'perPage', 'total', 'lastPage'],
    ]);
    expect($response->json('meta.total'))->toBe(1)
        ->and($response->json('data.0.isLowStock'))->toBeTrue();
});

test('adjusting inventory quantity writes an audit log entry', function () {
    $item = InventoryItem::factory()->create(['quantity' => 10]);

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/inventory/{$item->id}", [
        'quantity' => 25,
        'reason' => 'Stock count correction after physical audit.',
    ]);

    $response->assertOk()->assertJsonPath('quantity', 25);

    $this->assertDatabaseHas('audit_logs', [
        'action' => 'inventory.adjusted',
        'subject_type' => InventoryItem::class,
        'subject_id' => $item->id,
        'user_id' => $this->admin->id,
    ]);
});

test('a restricted role cannot manage inventory', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $this->actingAs($marketer)->getJson('/api/v1/admin/inventory')->assertForbidden();
    $this->actingAs($marketer)->getJson('/api/v1/admin/warehouses')->assertForbidden();
});
