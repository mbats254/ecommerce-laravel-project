<?php

use App\Models\AuditLog;
use App\Models\Category;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Administrator');
});

test('creating an admin-editable model writes an audit log entry', function () {
    $this->actingAs($this->admin)->postJson('/api/v1/admin/categories', [
        'name' => 'Laptops',
        'slug' => 'laptops',
    ])->assertCreated();

    $this->assertDatabaseHas('audit_logs', [
        'action' => 'category.created',
        'user_id' => $this->admin->id,
    ]);
});

test('updating an admin-editable model writes an audit log entry with the changed fields', function () {
    $category = Category::factory()->create(['name' => 'Old Name']);

    $this->actingAs($this->admin)->putJson("/api/v1/admin/categories/{$category->id}", [
        'name' => 'New Name',
    ])->assertOk();

    $log = AuditLog::query()->where('action', 'category.updated')->latest()->first();

    expect($log)->not->toBeNull()
        ->and($log->changes)->toHaveKey('name');
});

test('deleting an admin-editable model writes an audit log entry', function () {
    $category = Category::factory()->create();

    $this->actingAs($this->admin)->deleteJson("/api/v1/admin/categories/{$category->id}")->assertNoContent();

    $this->assertDatabaseHas('audit_logs', [
        'action' => 'category.deleted',
        'subject_type' => Category::class,
        'subject_id' => $category->id,
        'user_id' => $this->admin->id,
    ]);
});

test('the audit log endpoint lists entries filterable by action', function () {
    $this->actingAs($this->admin)->postJson('/api/v1/admin/categories', [
        'name' => 'Laptops',
        'slug' => 'laptops',
    ]);

    $response = $this->actingAs($this->admin)->getJson('/api/v1/admin/audit-logs?action=category.created');

    $response->assertOk()->assertJsonStructure([
        'data' => [['id', 'user', 'action', 'subjectType', 'subjectId', 'changes', 'ipAddress', 'createdAt']],
        'meta' => ['currentPage', 'perPage', 'total', 'lastPage'],
    ]);
    expect($response->json('meta.total'))->toBeGreaterThanOrEqual(1);
});

test('a restricted role cannot view audit logs', function () {
    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    $this->actingAs($catalogManager)->getJson('/api/v1/admin/audit-logs')->assertForbidden();
});
