<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Safaricom does not sign Daraja callbacks, so an IP allowlist is the only
 * practical way to verify a callback actually came from them before it's
 * trusted to flip a payment to successful.
 */
class VerifyMpesaCallbackIp
{
    /**
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowed = config('services.mpesa.allowed_callback_ips');

        if (empty($allowed)) {
            if (app()->environment('production')) {
                abort(403);
            }

            return $next($request);
        }

        abort_unless(in_array($request->ip(), $allowed, true), 403);

        return $next($request);
    }
}
