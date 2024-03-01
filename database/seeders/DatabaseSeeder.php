<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
        'name' => 'Ahmad Rafi',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin123')
       ]);
       User::create([
        'name' => 'Asep Kurniawan',
        'email' => 'hello@gmail.com',
        'password' => bcrypt('admin123')
       ]);
       User::create([
        'name' => 'Test User',
        'email' => 'admin111@gmail.com',
        'password' => bcrypt('admin123')
       ]);
    }
}
