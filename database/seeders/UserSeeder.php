<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan untuk mengimpor model User
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Contoh menambahkan data pengguna
        User::create([
            'username' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('123'), // Jangan lupa mengenkripsi password
            'role' => 'admin', // Misalnya, jika Anda memiliki kolom role
        ]);

        User::create([
            'username' => 'Jane Smith',
            'email' => 'jane1@example.com',
            'password' => Hash::make('123'),
            'role' => 'user',
        ]);

        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}
