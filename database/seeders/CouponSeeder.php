<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * firstOrCreate() keyed on code — coupons.code is unique, so re-running
     * this seeder on top of an already-seeded database must not try to
     * insert 'WELCOME10'/'SAVE500' a second time.
     */
    public function run(): void
    {
        Coupon::query()->firstOrCreate(['code' => 'WELCOME10'], ['type' => 'percentage', 'value' => 10]);
        Coupon::query()->firstOrCreate(['code' => 'SAVE500'], ['type' => 'fixed', 'value' => 500]);
    }
}
