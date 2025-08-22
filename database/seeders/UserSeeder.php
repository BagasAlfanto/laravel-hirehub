<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
            'uid' => Str::uuid()->toString(),
            'username' => 'Penyedia Kerja',
            'email' => 'bagas@gmail.com',
            'password' => bcrypt('bagasgeming'),
            'role' => 'penyedia',
        ]);

        User::create([
            'uid' => Str::uuid()->toString(),
            'username' => 'Pencari Kerja',
            'email' => 'bintang@gmail.com',
            'password' => bcrypt('bintanggeming'),
            'role' => 'pencari',
        ]);
    }
}
