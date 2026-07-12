<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@rentalbike.com',
            'password' => Hash::make('password'),
            'phone' => '081234567890',
            'address' => 'Kantor Rental Bike',
            'role' => 'admin',
        ]);


        User::create([
            'name' => 'Owner Rental Bike',
            'email' => 'owner@rentalbike.com',
            'password' => Hash::make('password'),
            'phone' => '081234567891',
            'address' => 'Owner Address',
            'role' => 'owner',
        ]);


        User::create([
            'name' => 'User Demo',
            'email' => 'user@rentalbike.com',
            'password' => Hash::make('password'),
            'phone' => '081234567892',
            'address' => 'User Address',
            'role' => 'user',
        ]);
    }
}