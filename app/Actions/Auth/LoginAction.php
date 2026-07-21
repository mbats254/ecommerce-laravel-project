<?php

namespace App\Actions\Auth;

use App\Actions\Cart\MergeGuestCartAction;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class LoginAction
{
    public function __construct(
        private readonly MergeGuestCartAction $mergeGuestCart,
    ) {}

    /**
     * @param  array{email: string, password: string}  $credentials
     * @return array{user: User, token: ?string}
     */
    public function handle(Request $request, array $credentials): array
    {
        // The SPA sends an Origin/Referer matching SANCTUM_STATEFUL_DOMAINS and
        // gets cookie-session auth, exactly as before. Anything else (Postman,
        // mobile, third-party API clients) has no session to log into — it
        // gets a personal access token instead. Same endpoint, same
        // credentials check, different auth mechanism for the caller.
        return EnsureFrontendRequestsAreStateful::fromFrontend($request)
            ? $this->loginStateful($request, $credentials)
            : $this->loginStateless($credentials);
    }

    /**
     * @param  array{email: string, password: string}  $credentials
     * @return array{user: User, token: null}
     */
    private function loginStateful(Request $request, array $credentials): array
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

        return ['user' => $user, 'token' => null];
    }

    /**
     * @param  array{email: string, password: string}  $credentials
     * @return array{user: User, token: string}
     */
    private function loginStateless(array $credentials): array
    {
        $user = User::query()->where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw new AuthenticationException('These credentials do not match our records.');
        }

        $user->forceFill(['last_login_at' => now()])->save();

        return ['user' => $user, 'token' => $user->createToken('api-client')->plainTextToken];
    }
}
