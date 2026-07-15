<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

/**
 * Transcribed from the frontend's own fixtures (`MOCK_ROLES` and the
 * `PermissionKey` union in `src/types/admin.ts`) so the roles and
 * permissions this API enforces are exactly the ones the admin UI was
 * designed against — see implementation plan §3.1.
 */
class RolesAndPermissionsSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'products.manage',
            'orders.manage',
            'customers.manage',
            'marketing.manage',
            'reports.view',
            'settings.manage',
            'users.manage',
        ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

        // findOrCreate() above populates the registrar's permission cache as
        // an empty collection on its first (miss) lookup; it's never refreshed
        // as new permissions are created within the same request, so
        // syncPermissions() below would see none of them without this.
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $roles = [
            'Administrator' => $permissions,
            'Catalog Manager' => ['products.manage', 'reports.view'],
            'Sales & Support' => ['orders.manage', 'customers.manage', 'reports.view'],
            'Marketing' => ['marketing.manage', 'reports.view'],
        ];

        foreach ($roles as $role => $rolePermissions) {
            Role::findOrCreate($role)->syncPermissions($rolePermissions);
        }
    }
}
