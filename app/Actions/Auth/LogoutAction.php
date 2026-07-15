<?php

namespace App\Actions\Auth;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class LogoutAction
{
    public function handle(Session $session): void
    {
        Auth::guard('web')->logout();

        $session->invalidate();
        $session->regenerateToken();
    }
}
