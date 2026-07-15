<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class ReviewCollection extends PaginatedResourceCollection
{
    public $collects = ReviewResource::class;
}
