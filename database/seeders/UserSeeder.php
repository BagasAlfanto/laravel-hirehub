<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Penyedia Kerja',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'penyedia',
        ]);

        User::create([
            'username' => 'Pencari Kerja',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'role' => 'pencari',
        ]);
    }
}
