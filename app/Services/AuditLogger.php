<?php

namespace App\Services;

use App\Models\AuditLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

/**
 * Writes to the audit_logs table. Phase 6 generalizes this into an
 * `Auditable` trait applied to every admin-editable model (automatic
 * create/update/delete logging); for now it's called explicitly wherever
 * the plan requires an audited action ahead of that (e.g. inventory
 * adjustments).
 */
class AuditLogger
{
    /**
     * @param  array<string, mixed>  $changes
     */
    public function log(string $action, Model $subject, array $changes = []): AuditLog
    {
        return AuditLog::query()->create([
            'user_id' => Auth::id(),
            'action' => $action,
            'subject_type' => $subject::class,
            'subject_id' => $subject->getKey(),
            'changes' => $changes,
            'ip_address' => Request::ip(),
        ]);
    }
}
