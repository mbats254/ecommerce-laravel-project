<?php

namespace App\Http\Resources\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin User */
class AdminUserResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var User $user */
        $user = $this->resource;

        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'avatarUrl' => $user->avatar_url,
            'status' => $user->status,
            'role' => $user->getRoleNames()->first(),
            'lastActiveAt' => $user->last_login_at?->toIso8601String(),
            'createdAt' => $user->created_at->toIso8601String(),
        ];
    }
}
