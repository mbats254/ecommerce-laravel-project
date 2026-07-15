<?php

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class LoginAction
{
    /**
     * @param  array{email: string, password: string}  $credentials
     */
    public function handle(array $credentials): User
    {
        if (! Auth::attempt($credentials, remember: true)) {
            throw new AuthenticationException('These credentials do not match our records.');
        }

        /** @var User $user */
        $user = Auth::user();

        $user->forceFill(['last_login_at' => now()])->save();

        return $user;
    }
}
