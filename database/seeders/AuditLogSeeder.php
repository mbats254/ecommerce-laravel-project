<?php

namespace Database\Seeders;

use App\Models\AuditLog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * The Auditable trait (app/Concerns/Auditable.php) would normally write
 * these rows automatically, but every seeder here runs under
 * WithoutModelEvents to avoid a flood of notifications/cache-invalidation
 * side effects during seeding — so audit_logs needs its own seeder to give
 * GET /admin/audit-logs something realistic to show. Runs last, once
 * categories/products/settings/users already exist, so it can reference
 * real subject IDs.
 */
class AuditLogSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $admin = User::query()->where('email', 'admin@anchor.africa')->first();
        $category = Category::query()->first();
        $product = Product::query()->first();
        $setting = Setting::query()->first();

        if (! $admin || ! $category || ! $product || ! $setting) {
            $this->command->getOutput()->writeln('  <comment>Skipping AuditLogSeeder — prerequisite records not found yet.</comment>');

            return;
        }

        AuditLog::factory()->create([
            'user_id' => $admin->id,
            'action' => 'category.created',
            'subject_type' => Category::class,
            'subject_id' => $category->id,
            'changes' => ['name' => $category->name, 'slug' => $category->slug],
        ]);

        AuditLog::factory()->create([
            'user_id' => $admin->id,
            'action' => 'product.updated',
            'subject_type' => Product::class,
            'subject_id' => $product->id,
            'changes' => ['price' => ['from' => (string) ($product->price - 5000), 'to' => (string) $product->price]],
        ]);

        AuditLog::factory()->create([
            'user_id' => $admin->id,
            'action' => 'setting.updated',
            'subject_type' => Setting::class,
            'subject_id' => $setting->id,
            'changes' => ['email_on_new_order' => ['from' => false, 'to' => true]],
        ]);
    }
}
