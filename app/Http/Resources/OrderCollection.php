<?php

namespace App\Http\Resources;

class OrderCollection extends PaginatedResourceCollection
{
    public $collects = OrderResource::class;
}
