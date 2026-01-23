<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        User::create([
            'name' => 'susanoo',
            'email' => 'susanoo@example.com',
            'password' => 'password',
            'email_verified_at' => '2026-01-22 00:00:00',
        ]);
        User::create([
            'name' => 'rainyrook',
            'email' => 'rainyrook@example.com',
            'password' => 'password',
            'email_verified_at' => '2026-01-22 00:00:00',
        ]);

    }
}
