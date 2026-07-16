<?php

namespace App\Models;

use App\Enums\InsightImpact;
use Database\Factories\AiInsightFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiInsight extends Model
{
    /** @use HasFactory<AiInsightFactory> */
    use HasFactory, HasUlids;

    const UPDATED_AT = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'impact',
        'metric_label',
        'metric_value',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'impact' => InsightImpact::class,
        ];
    }
}
