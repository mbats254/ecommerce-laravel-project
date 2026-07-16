<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class AiInsightCollection extends PaginatedResourceCollection
{
    public $collects = AiInsightResource::class;
}
