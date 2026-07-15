<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Reshapes Laravel's default paginator output (`data`, `links`, `meta` with
 * snake_case keys) into the frontend's fixed `PaginatedResponse<T>` contract:
 * `{ data: T[], meta: { currentPage, perPage, total, lastPage } }` — no
 * `links` key, camelCase meta. Every paginated list endpoint's Resource
 * collection extends this so the shape only has to be correct once.
 */
abstract class PaginatedResourceCollection extends ResourceCollection
{
    /**
     * @param  array<string, mixed>  $paginated
     * @param  array<string, mixed>  $default
     * @return array<string, mixed>
     */
    public function paginationInformation(Request $request, array $paginated, array $default): array
    {
        return [
            'meta' => [
                'currentPage' => $paginated['current_page'],
                'perPage' => $paginated['per_page'],
                'total' => $paginated['total'],
                'lastPage' => $paginated['last_page'],
            ],
        ];
    }
}
