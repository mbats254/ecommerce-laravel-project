<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class OrderCollection extends PaginatedResourceCollection
{
    public $collects = OrderResource::class;
}
