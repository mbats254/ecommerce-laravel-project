<?php

namespace App\Actions\Admin;

use App\Models\User;

class UpdateAdminUserAction
{
    /**
     * @param  array{name?: string, phone?: ?string, role?: string, status?: string}  $data
     */
    public function handle(User $user, array $data): User
    {
        $role = $data['role'] ?? null;
        unset($data['role']);

        $user->update($data);

        if ($role !== null) {
            $user->syncRoles([$role]);
        }

        return $user->refresh();
    }
}
