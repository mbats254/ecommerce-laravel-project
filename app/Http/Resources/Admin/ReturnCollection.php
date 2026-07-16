<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class ReturnCollection extends PaginatedResourceCollection
{
    public $collects = ReturnResource::class;
}
