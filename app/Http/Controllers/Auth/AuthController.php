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
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class AuthController extends Controller
{
    public function register(RegisterRequest $request, RegisterUserAction $action): JsonResponse
    {
        $result = $action->handle($request, $request->validated());

        return response()->json($this->userPayload($request, $result), 201);
    }

    public function login(LoginRequest $request, LoginAction $action): JsonResponse
    {
        $result = $action->handle($request, $request->validated());

        return response()->json($this->userPayload($request, $result));
    }

    /**
     * UserResource::additional() would wrap the response under a "data" key
     * whenever the additional array is non-empty — merging the token in by
     * hand keeps the flat shape the rest of the API already commits to.
     *
     * @param  array{user: User, token: ?string}  $result
     * @return array<string, mixed>
     */
    private function userPayload(Request $request, array $result): array
    {
        $payload = (new UserResource($result['user']))->resolve($request);

        if ($result['token']) {
            $payload['token'] = $result['token'];
        }

        return $payload;
    }

    public function logout(Request $request, LogoutAction $action): Response
    {
        $action->handle($request);

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
