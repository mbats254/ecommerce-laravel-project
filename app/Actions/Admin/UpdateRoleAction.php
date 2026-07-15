<?php

namespace App\Actions\Admin;

use Spatie\Permission\Models\Role;

class UpdateRoleAction
{
    /**
     * @param  array{name?: string, permissions?: array<int, string>}  $data
     */
    public function handle(Role $role, array $data): Role
    {
        if (isset($data['name'])) {
            $role->update(['name' => $data['name']]);
        }

        if (isset($data['permissions'])) {
            $role->syncPermissions($data['permissions']);
        }

        return $role->refresh();
    }
}
