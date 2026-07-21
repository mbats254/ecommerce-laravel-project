<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Banner::factory()->create([
            'title' => 'Big Friday Sale',
            'image_path' => 'banners/big-friday-sale.jpg',
            'link_url' => '/products?onSale=true',
            'position' => 'homepage_hero',
        ]);

        Banner::factory()->create([
            'title' => 'New Arrivals',
            'image_path' => 'banners/new-arrivals.jpg',
            'link_url' => '/products?sort=created_at_desc',
            'position' => 'homepage_top',
        ]);

        Banner::factory()->create([
            'title' => 'Laptop Deals',
            'image_path' => 'banners/laptop-deals.jpg',
            'link_url' => '/categories/laptops',
            'position' => 'category_top',
        ]);
    }
}
