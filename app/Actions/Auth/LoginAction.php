<?php

namespace App\Actions\Auth;

use App\Actions\Cart\MergeGuestCartAction;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAction
{
    public function __construct(
        private readonly MergeGuestCartAction $mergeGuestCart,
    ) {}

    /**
     * @param  array{email: string, password: string}  $credentials
     */
    public function handle(Request $request, array $credentials): User
    {
        $guestSessionId = $request->session()->getId();

        if (! Auth::attempt($credentials, remember: true)) {
            throw new AuthenticationException('These credentials do not match our records.');
        }

        /** @var User $user */
        $user = Auth::user();

        $user->forceFill(['last_login_at' => now()])->save();

        $this->mergeGuestCart->handle($user, $guestSessionId);

        $request->session()->regenerate();

        return $user;
    }
}
