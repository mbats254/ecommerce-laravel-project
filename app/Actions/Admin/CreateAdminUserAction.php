<?php

namespace App\Actions\Admin;

use App\Enums\AdminUserStatus;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class CreateAdminUserAction
{
    /**
     * @param  array{name: string, email: string, phone: ?string, role: string}  $data
     */
    public function handle(array $data): User
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'password' => Hash::make(Str::random(40)),
            'status' => AdminUserStatus::Invited,
        ]);

        $user->assignRole($data['role']);

        // The invited user sets their own password via the existing
        // password-reset flow rather than a separate "accept invite" endpoint.
        Password::sendResetLink(['email' => $user->email]);

        return $user;
    }
}
