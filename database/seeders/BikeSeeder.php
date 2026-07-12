<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    public function run(): void
    {
        Bike::create([
            'category_id' => 1,
            'name' => 'Polygon MTB X1',
            'code' => 'MTB001',
            'description' => 'Mountain bike premium',
            'price_per_day' => 50000,
            'stock' => 5,
            'status' => 'available',
        ]);


        Bike::create([
            'category_id' => 2,
            'name' => 'United City Bike',
            'code' => 'CITY001',
            'description' => 'Sepeda santai perkotaan',
            'price_per_day' => 40000,
            'stock' => 10,
            'status' => 'available',
        ]);


        Bike::create([
            'category_id' => 3,
            'name' => 'Electric Bike Pro',
            'code' => 'EB001',
            'description' => 'Sepeda listrik',
            'price_per_day' => 80000,
            'stock' => 3,
            'status' => 'available',
        ]);
    }
}