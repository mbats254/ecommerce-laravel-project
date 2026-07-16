<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\AuditLogCollection;
use App\Models\AuditLog;
use App\Support\FlatQueryFilters;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class AuditLogController extends Controller
{
    public function index(Request $request): AuditLogCollection
    {
        $this->authorize('settings.manage');

        FlatQueryFilters::merge($request, ['action', 'subjectType']);

        $logs = QueryBuilder::for(AuditLog::query())
            ->allowedFilters(
                AllowedFilter::exact('action'),
                AllowedFilter::callback('subjectType', function ($query, $value) {
                    $query->where('subject_type', 'like', "%{$value}");
                }),
            )
            ->allowedSorts('created_at')
            ->defaultSort('-created_at')
            ->with('user')
            ->paginate($request->integer('perPage', 25))
            ->withQueryString();

        return new AuditLogCollection($logs);
    }
}
