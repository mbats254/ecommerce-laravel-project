<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class QuotationCollection extends PaginatedResourceCollection
{
    public $collects = QuotationResource::class;
}
