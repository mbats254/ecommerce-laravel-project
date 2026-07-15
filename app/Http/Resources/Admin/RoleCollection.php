<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class RoleCollection extends PaginatedResourceCollection
{
    public $collects = RoleResource::class;
}
