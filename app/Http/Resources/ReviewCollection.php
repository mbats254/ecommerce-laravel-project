<?php

namespace App\Http\Resources;

class ReviewCollection extends PaginatedResourceCollection
{
    public $collects = ReviewResource::class;
}
