<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Admin
        User::create([
            'name' => 'Admin MindWell',
            'email' => 'admin@mindwell.com',
            'password' => Hash::make('password'), // Ganti dengan password aman
            'is_admin' => true,
        ]);

        // Akun User Biasa
        User::create([
            'name' => 'Andi Budiman',
            'email' => 'andi@example.com',
            'password' => Hash::make('password'),
        ]);
        
        // Generate user lain jika perlu
        User::factory(10)->create();
    }
}