<?php

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class LogoutAction
{
    public function handle(Request $request): void
    {
        if (EnsureFrontendRequestsAreStateful::fromFrontend($request)) {
            Auth::guard('web')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return;
        }

        // Token-authenticated (non-frontend) clients have no session to tear
        // down — "logging out" means revoking the token they authenticated
        // with, and only that token, not every token the user holds.
        $request->user()->currentAccessToken()->delete();
    }
}
