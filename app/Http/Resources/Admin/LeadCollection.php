<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class LeadCollection extends PaginatedResourceCollection
{
    public $collects = LeadResource::class;
}
