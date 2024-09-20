<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambahkan data pengguna
        User::create([
            'username' => 'admin1',
            'fullname' => 'Admin Satu',
            'role' => 'admin',
            'email' => 'admin1@example.com',
            'password' => bcrypt('admin12345'),
            'verification_token' => Str::random(60),
        ]);

        User::create([
            'username' => 'user1',
            'fullname' => 'User Satu',
            'role' => 'user',
            'email' => 'user1@example.com',
            'password' => bcrypt('user12345'), // Anda dapat menggunakan bcrypt() untuk mengenkripsi password
            'verification_token' => Str::random(60), // Anda dapat menggunakan str_random() untuk menghasilkan token acak
        ]);

    }
}
