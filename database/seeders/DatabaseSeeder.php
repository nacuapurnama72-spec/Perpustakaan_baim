<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Akun Admin Bawaan untuk Uji Coba Asesor
        User::create([
            'name' => 'Admin Toko',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        // 2. Data menu makanan/minuman awal beserta foto
        Food::create([
            'name' => 'Nasi Goreng Spesial',
            'category' => 'Makanan',
            'price' => 25000,
            'description' => 'Nasi goreng dengan telur, ayam suwir, dan kerupuk gurih.',
            'image' => 'foods/nasigoreng.jpg',
        ]);

        Food::create([
            'name' => 'Mie Goreng Seafood',
            'category' => 'Makanan',
            'price' => 28000,
            'description' => 'Mie goreng lezat dengan udang, cumi, dan sayuran segar.',
            'image' => 'foods/miegoreng.jpg',
        ]);

        Food::create([
            'name' => 'Es Teh Manis',
            'category' => 'Minuman',
            'price' => 5000,
            'description' => 'Teh melati manis segar dingin dengan es batu.',
            'image' => 'foods/esteh.jpg',
        ]);

        Food::create([
            'name' => 'Jus Alpukat',
            'category' => 'Minuman',
            'price' => 15000,
            'description' => 'Jus alpukat kental dengan susu cokelat manis.',
            'image' => 'foods/jusalpukat.jpg',
        ]);

        Food::create([
            'name' => 'Kentang Goreng (French Fries)',
            'category' => 'Cemilan',
            'price' => 12000,
            'description' => 'Kentang goreng renyah disajikan dengan saus sambal dan mayones.',
            'image' => 'foods/kentanggoreng.jpg',
        ]);
    }
}