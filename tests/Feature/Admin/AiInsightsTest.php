<?php

use App\Models\AiInsight;
use App\Models\InventoryItem;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Catalog Manager');
});

test('the nightly command writes a low stock insight for an out of stock product', function () {
    $product = Product::factory()->create(['name' => 'Dell XPS 13']);
    InventoryItem::factory()->for($product)->outOfStock()->create();

    $this->artisan('app:generate-ai-insights')->assertSuccessful();

    $this->assertDatabaseHas('ai_insights', [
        'title' => 'Dell XPS 13 is out of stock',
        'impact' => 'high',
    ]);
});

test('the ai-insights endpoint lists rows written by the command', function () {
    AiInsight::factory()->create(['title' => 'Test insight']);

    $response = $this->actingAs($this->admin)->getJson('/api/v1/admin/ai-insights');

    $response->assertOk()->assertJsonStructure([
        'data' => [['id', 'title', 'description', 'impact', 'metricLabel', 'metricValue', 'createdAt']],
        'meta' => ['currentPage', 'perPage', 'total', 'lastPage'],
    ]);
});

test('a user with no admin role cannot view ai insights', function () {
    $customer = User::factory()->create();

    $this->actingAs($customer)->getJson('/api/v1/admin/ai-insights')->assertForbidden();
});
