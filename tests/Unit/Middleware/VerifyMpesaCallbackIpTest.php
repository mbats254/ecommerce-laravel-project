<?php

use App\Http\Middleware\VerifyMpesaCallbackIp;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

function callThroughMiddleware(Request $request): string
{
    $response = (new VerifyMpesaCallbackIp)->handle($request, fn () => new Response('next-called'));

    return $response->getContent();
}

test('a request from an allowed ip passes through', function () {
    config(['services.mpesa.allowed_callback_ips' => ['196.201.214.200']]);
    $request = Request::create('/callback', 'POST', server: ['REMOTE_ADDR' => '196.201.214.200']);

    expect(callThroughMiddleware($request))->toBe('next-called');
});

test('a request from a disallowed ip is rejected with 403', function () {
    config(['services.mpesa.allowed_callback_ips' => ['196.201.214.200']]);
    $request = Request::create('/callback', 'POST', server: ['REMOTE_ADDR' => '10.0.0.1']);

    callThroughMiddleware($request);
})->throws(HttpException::class);

test('an empty allowlist outside production passes every request through', function () {
    config(['services.mpesa.allowed_callback_ips' => []]);
    $request = Request::create('/callback', 'POST', server: ['REMOTE_ADDR' => '10.0.0.1']);

    expect(app()->environment())->not->toBe('production');
    expect(callThroughMiddleware($request))->toBe('next-called');
});

test('an empty allowlist in production rejects every request', function () {
    app()->detectEnvironment(fn () => 'production');
    config(['services.mpesa.allowed_callback_ips' => []]);
    $request = Request::create('/callback', 'POST', server: ['REMOTE_ADDR' => '10.0.0.1']);

    try {
        callThroughMiddleware($request);
    } finally {
        app()->detectEnvironment(fn () => 'testing');
    }
})->throws(HttpException::class);
