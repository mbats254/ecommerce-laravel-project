<?php

namespace App\Actions\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class RegisterUserAction
{
    /**
     * @param  array{name: string, email: string, phone: ?string, password: string}  $data
     * @return array{user: User, token: ?string}
     */
    public function handle(Request $request, array $data): array
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'password' => $data['password'],
        ]);

        event(new Registered($user));

        // Same split as LoginAction: the SPA gets logged into a session (it
        // has one, via Origin/Referer matching SANCTUM_STATEFUL_DOMAINS);
        // anything else gets a personal access token instead, since there's
        // no session to log into.
        if (EnsureFrontendRequestsAreStateful::fromFrontend($request)) {
            Auth::login($user);

            return ['user' => $user, 'token' => null];
        }

        return ['user' => $user, 'token' => $user->createToken('api-client')->plainTextToken];
    }
}
