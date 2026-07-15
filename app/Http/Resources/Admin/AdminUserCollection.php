<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class AdminUserCollection extends PaginatedResourceCollection
{
    public $collects = AdminUserResource::class;
}
