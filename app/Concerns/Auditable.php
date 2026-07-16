<?php

namespace App\Concerns;

use App\Services\AuditLogger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * Replaces per-model audit-logging boilerplate: applying this to an
 * admin-editable model automatically writes to audit_logs on
 * create/update/delete. Adding audit logging to a new model is
 * `use Auditable;` — nothing else (see implementation plan §2).
 */
trait Auditable
{
    public static function bootAuditable(): void
    {
        static::created(function (Model $model) {
            app(AuditLogger::class)->log(static::auditAction('created'), $model, $model->getAttributes());
        });

        static::updated(function (Model $model) {
            $changes = Arr::except($model->getChanges(), ['updated_at']);

            if ($changes !== []) {
                app(AuditLogger::class)->log(static::auditAction('updated'), $model, $changes);
            }
        });

        static::deleted(function (Model $model) {
            app(AuditLogger::class)->log(static::auditAction('deleted'), $model);
        });
    }

    protected static function auditAction(string $event): string
    {
        return strtolower(class_basename(static::class)).'.'.$event;
    }
}
