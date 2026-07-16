<?php

namespace App\Http\Resources\Admin;

use App\Models\AuditLog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin AuditLog */
class AuditLogResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var AuditLog $log */
        $log = $this->resource;

        return [
            'id' => $log->id,
            'user' => $log->user === null ? null : [
                'id' => $log->user->id,
                'name' => $log->user->name,
            ],
            'action' => $log->action,
            'subjectType' => class_basename($log->subject_type),
            'subjectId' => $log->subject_id,
            'changes' => $log->changes,
            'ipAddress' => $log->ip_address,
            'createdAt' => $log->created_at->toIso8601String(),
        ];
    }
}
