<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Admin\CreateAdminUserAction;
use App\Actions\Admin\UpdateAdminUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdminUserRequest;
use App\Http\Requests\Admin\UpdateAdminUserRequest;
use App\Http\Resources\Admin\AdminUserCollection;
use App\Http\Resources\Admin\AdminUserResource;
use App\Models\User;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    public function index(Request $request): AdminUserCollection
    {
        $this->authorize('users.manage');

        FlatQueryFilters::merge($request, ['status', 'role']);

        $users = QueryBuilder::for(User::query()->whereHas('roles'))
            ->allowedFilters('status', AllowedFilter::scope('role'))
            ->allowedSorts('name', 'created_at', 'last_login_at')
            ->defaultSort('-created_at')
            ->with('roles')
            ->paginate(request()->integer('perPage', 15))
            ->withQueryString();

        return new AdminUserCollection($users);
    }

    public function store(StoreAdminUserRequest $request, CreateAdminUserAction $action): AdminUserResource
    {
        $user = $action->handle($request->validated());

        return new AdminUserResource($user->load('roles'));
    }

    public function update(UpdateAdminUserRequest $request, User $user, UpdateAdminUserAction $action): AdminUserResource
    {
        $user = $action->handle($user, $request->validated());

        return new AdminUserResource($user->load('roles'));
    }
}
