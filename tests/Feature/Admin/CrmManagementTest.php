<?php

use App\Models\Lead;
use App\Models\Product;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Sales & Support');
});

test('sales can create and update a lead', function () {
    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/crm/leads', [
        'contact_name' => 'John Mwangi',
        'email' => 'john@example.com',
        'phone' => '254712345678',
        'company_name' => 'Acme Ltd',
    ]);

    $response->assertCreated()->assertJsonPath('status', 'new');

    $lead = Lead::query()->where('email', 'john@example.com')->firstOrFail();

    $update = $this->actingAs($this->admin)->patchJson("/api/v1/admin/crm/leads/{$lead->id}", [
        'status' => 'qualified',
    ]);

    $update->assertOk()->assertJsonPath('status', 'qualified');
});

test('sales can create a quotation and the total is computed from its line items', function () {
    $productA = Product::factory()->create(['price' => 1000]);
    $productB = Product::factory()->create(['price' => 2500]);

    $response = $this->actingAs($this->admin)->postJson('/api/v1/admin/crm/quotations', [
        'items' => [
            ['product_id' => $productA->id, 'quantity' => 2],
            ['product_id' => $productB->id, 'quantity' => 1],
        ],
    ]);

    // (1000 * 2) + (2500 * 1) = 4500
    $response->assertCreated()
        ->assertJsonPath('total', 4500)
        ->assertJsonCount(2, 'items');
});

test('updating a quotation with new items recomputes its total', function () {
    $product = Product::factory()->create(['price' => 1000]);
    $newProduct = Product::factory()->create(['price' => 3000]);

    $quotation = $this->actingAs($this->admin)->postJson('/api/v1/admin/crm/quotations', [
        'items' => [['product_id' => $product->id, 'quantity' => 1]],
    ])->json();

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/crm/quotations/{$quotation['id']}", [
        'items' => [['product_id' => $newProduct->id, 'quantity' => 2]],
    ]);

    $response->assertOk()->assertJsonPath('total', 6000)->assertJsonCount(1, 'items');
});

test('a restricted role cannot manage CRM', function () {
    $marketer = User::factory()->create();
    $marketer->assignRole('Marketing');

    $this->actingAs($marketer)->getJson('/api/v1/admin/crm/leads')->assertForbidden();
    $this->actingAs($marketer)->getJson('/api/v1/admin/crm/quotations')->assertForbidden();
});
