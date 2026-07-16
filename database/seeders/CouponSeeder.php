<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coupon::factory()->create([
            'code' => 'WELCOME10',
            'type' => 'percentage',
            'value' => 10,
        ]);

        Coupon::factory()->fixed(500)->create([
            'code' => 'SAVE500',
        ]);
    }
}
