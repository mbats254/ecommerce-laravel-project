<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class CouponCollection extends PaginatedResourceCollection
{
    public $collects = CouponResource::class;
}
