<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Setting::current() would lazily create this row on first access anyway,
 * but seeding it explicitly means /admin/settings shows real values from
 * the first request rather than whatever bare defaults firstOrCreate([])
 * happens to leave in place.
 */
class SettingSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // firstOrCreate([]), not factory()->create() — settings is a
        // singleton table (see Setting::current()); re-running this seeder
        // on top of an already-seeded database must not insert a second row.
        Setting::query()->firstOrCreate([], [
            'email_on_new_order' => true,
            'sms_on_order_shipped' => true,
        ]);
    }
}
