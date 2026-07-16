<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Admin\CreateRoleAction;
use App\Actions\Admin\UpdateRoleAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRoleRequest;
use App\Http\Requests\Admin\UpdateRoleRequest;
use App\Http\Resources\Admin\RoleCollection;
use App\Http\Resources\Admin\RoleResource;
use Spatie\Permission\Models\Role;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @author Mbatia Muniu <mbatia@keshonect.co.ke>
 */
class RoleController extends Controller
{
    public function index(): RoleCollection
    {
        $this->authorize('users.manage');

        $roles = QueryBuilder::for(Role::query())
            ->allowedSorts('name', 'created_at')
            ->defaultSort('name')
            ->with('permissions')
            ->paginate(request()->integer('perPage', 15))
            ->withQueryString();

        return new RoleCollection($roles);
    }

    public function store(StoreRoleRequest $request, CreateRoleAction $action): RoleResource
    {
        $role = $action->handle($request->validated());

        return new RoleResource($role->load('permissions'));
    }

    public function update(UpdateRoleRequest $request, Role $role, UpdateRoleAction $action): RoleResource
    {
        $role = $action->handle($role, $request->validated());

        return new RoleResource($role->load('permissions'));
    }
}
