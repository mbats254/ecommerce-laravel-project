<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class InventoryItemCollection extends PaginatedResourceCollection
{
    public $collects = InventoryItemResource::class;
}
