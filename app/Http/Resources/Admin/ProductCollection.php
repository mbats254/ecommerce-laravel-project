<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class ProductCollection extends PaginatedResourceCollection
{
    public $collects = ProductResource::class;
}
