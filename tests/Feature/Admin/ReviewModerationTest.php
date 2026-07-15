<?php

use App\Models\Review;
use App\Models\User;
use Database\Seeders\RolesAndPermissionsSeeder;

beforeEach(function () {
    $this->seed(RolesAndPermissionsSeeder::class);
    $this->admin = User::factory()->create();
    $this->admin->assignRole('Marketing');
});

test('marketing can list the moderation queue filtered by status', function () {
    Review::factory()->count(2)->create();
    Review::factory()->approved()->create();

    $response = $this->actingAs($this->admin)->getJson('/api/v1/admin/reviews?status=pending');

    $response->assertOk();
    expect($response->json('meta.total'))->toBe(2);
});

test('marketing can approve a review', function () {
    $review = Review::factory()->create();

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/reviews/{$review->id}", [
        'status' => 'approved',
    ]);

    $response->assertOk()->assertJsonPath('status', 'approved');
});

test('moderation rejects an invalid status value', function () {
    $review = Review::factory()->create();

    $response = $this->actingAs($this->admin)->patchJson("/api/v1/admin/reviews/{$review->id}", [
        'status' => 'pending',
    ]);

    $response->assertUnprocessable()->assertJsonValidationErrors('status');
});

test('a restricted role cannot moderate reviews', function () {
    $catalogManager = User::factory()->create();
    $catalogManager->assignRole('Catalog Manager');

    $review = Review::factory()->create();

    $this->actingAs($catalogManager)->patchJson("/api/v1/admin/reviews/{$review->id}", [
        'status' => 'approved',
    ])->assertForbidden();
});
