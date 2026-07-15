<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Actions\Auth\RegisterUserAction;
use App\Actions\Auth\ResetPasswordAction;
use App\Actions\Auth\SendPasswordResetLinkAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(RegisterRequest $request, RegisterUserAction $action): UserResource
    {
        $user = $action->handle($request->validated());

        return new UserResource($user);
    }

    public function login(LoginRequest $request, LoginAction $action): UserResource
    {
        $user = $action->handle($request->validated());

        return new UserResource($user);
    }

    public function logout(Request $request, LogoutAction $action): Response
    {
        $action->handle($request->session());

        return response()->noContent();
    }

    public function me(Request $request): UserResource
    {
        return new UserResource($request->user());
    }

    public function forgotPassword(ForgotPasswordRequest $request, SendPasswordResetLinkAction $action): Response
    {
        $action->handle($request->validated());

        return response()->noContent();
    }

    public function resetPassword(ResetPasswordRequest $request, ResetPasswordAction $action): Response
    {
        $action->handle($request->validated());

        return response()->noContent();
    }
}
