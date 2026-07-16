<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\BannerResource;
use App\Http\Resources\PaginatedResourceCollection;

class BannerCollection extends PaginatedResourceCollection
{
    public $collects = BannerResource::class;
}
