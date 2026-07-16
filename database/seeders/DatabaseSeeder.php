<?php

namespace Database\Seeders;

use App\Enums\AdminUserStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            CatalogSeeder::class,
            CouponSeeder::class,
        ]);

        $administrator = User::factory()->create([
            'name' => 'Anchor Administrator',
            'email' => 'admin@anchor.africa',
            'status' => AdminUserStatus::Active,
        ]);

        $administrator->assignRole('Administrator');
    }
}
