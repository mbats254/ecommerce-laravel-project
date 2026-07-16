<?php

namespace App\Models;

use App\Concerns\Auditable;
use App\Enums\BannerPosition;
use Database\Factories\BannerFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    /** @use HasFactory<BannerFactory> */
    use Auditable, HasFactory, HasUlids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'image_path',
        'link_url',
        'position',
        'starts_at',
        'expires_at',
        'is_active',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'position' => BannerPosition::class,
            'starts_at' => 'datetime',
            'expires_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    /**
     * @param  Builder<Banner>  $query
     * @return Builder<Banner>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)
            ->where(fn (Builder $q) => $q->whereNull('starts_at')->orWhere('starts_at', '<=', now()))
            ->where(fn (Builder $q) => $q->whereNull('expires_at')->orWhere('expires_at', '>=', now()));
    }

    /**
     * @param  Builder<Banner>  $query
     * @return Builder<Banner>
     */
    public function scopePosition(Builder $query, string $position): Builder
    {
        return $query->where('position', $position);
    }
}
