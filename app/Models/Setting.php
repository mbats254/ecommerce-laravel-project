<?php

namespace App\Models;

use App\Concerns\Auditable;
use Database\Factories\SettingFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** @use HasFactory<SettingFactory> */
    use Auditable, HasFactory, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email_on_new_order',
        'sms_on_order_shipped',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_on_new_order' => 'boolean',
            'sms_on_order_shipped' => 'boolean',
        ];
    }

    /**
     * The application has exactly one settings row, lazily created the
     * first time anything asks for it. On that first-ever creation the
     * in-memory model only knows the attributes passed to create() (none),
     * so it's refreshed to pick up the DB column defaults before anything
     * reads a boolean off it. wasRecentlyCreated is then explicitly
     * cleared: "get the current settings" is a read from the caller's
     * perspective even on the one occasion it has to create the row, and
     * JsonResource uses that flag to pick 201 vs 200 on the response.
     */
    public static function current(): self
    {
        $setting = static::query()->firstOrCreate([]);

        if ($setting->wasRecentlyCreated) {
            $setting->refresh();
            $setting->wasRecentlyCreated = false;
        }

        return $setting;
    }
}
