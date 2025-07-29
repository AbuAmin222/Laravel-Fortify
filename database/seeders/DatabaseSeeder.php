<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Freelancer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'Test User',
        //     'email' => 'user@example.com',
        //     'password' => Hash::make('user@example.com')
        // ]);
        // Admin::create([
        //     'name' => 'Test Admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('admin@example.com')
        // ]);
        // Freelancer::create([
        //     'name' => 'Test Freelancer',
        //     'email' => 'freelancer@example.com',
        //     'password' => Hash::make('freelancer@example.com')
        // ]);
    }
}
