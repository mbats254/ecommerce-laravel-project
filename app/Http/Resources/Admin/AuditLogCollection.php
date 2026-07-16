<?php

namespace App\Http\Resources\Admin;

use App\Http\Resources\PaginatedResourceCollection;

class AuditLogCollection extends PaginatedResourceCollection
{
    public $collects = AuditLogResource::class;
}
