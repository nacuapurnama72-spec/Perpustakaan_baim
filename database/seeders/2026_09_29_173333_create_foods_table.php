<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('foods')->insert([
            [
                'name' => 'Nasi Goreng Spesial',
                'category' => 'Makanan',
                'price' => 25000,
                'description' => 'Nasi goreng dengan telur, ayam suwir, dan kerupuk.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mie Goreng Seafood',
                'category' => 'Makanan',
                'price' => 28000,
                'description' => 'Mie goreng pedas dengan udang dan cumi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Es Teh Manis',
                'category' => 'Minuman',
                'price' => 5000,
                'description' => 'Es teh melati segar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}