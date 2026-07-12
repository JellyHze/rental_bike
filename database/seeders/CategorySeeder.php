<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Mountain Bike',
            'description' => 'Sepeda untuk medan offroad'
        ]);

        Category::create([
            'name' => 'City Bike',
            'description' => 'Sepeda nyaman untuk area perkotaan'
        ]);

        Category::create([
            'name' => 'Electric Bike',
            'description' => 'Sepeda dengan bantuan motor listrik'
        ]);
    }
}