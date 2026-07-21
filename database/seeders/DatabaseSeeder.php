<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database. Order matters — each seeder after
     * the first few queries records created by earlier ones (customers,
     * products, categories) rather than creating its own, so the whole
     * dataset reads as one coherent store rather than disconnected islands.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            CatalogSeeder::class,
            CouponSeeder::class,
            BannerSeeder::class,
            ReviewSeeder::class,
            OrderSeeder::class,
            CrmSeeder::class,
            CustomerActivitySeeder::class,
            SettingSeeder::class,
            AiInsightSeeder::class,
            AuditLogSeeder::class,
        ]);
    }
}
