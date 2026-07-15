<?php

namespace App\Actions\Admin;

use Spatie\Permission\Models\Role;

class CreateRoleAction
{
    /**
     * @param  array{name: string, permissions: array<int, string>}  $data
     */
    public function handle(array $data): Role
    {
        // Explicit guard_name: Role isn't tied to any guard's user provider,
        // so Spatie falls back to config('auth.defaults.guard') — which the
        // Authenticate middleware mutates to 'sanctum' for the rest of an
        // authenticated request, mismatching the 'web' guard everything was
        // seeded under.
        $role = Role::query()->create(['name' => $data['name'], 'guard_name' => 'web']);

        $role->syncPermissions($data['permissions']);

        return $role;
    }
}
