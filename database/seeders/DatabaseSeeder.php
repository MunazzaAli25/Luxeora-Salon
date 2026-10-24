<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Default admin account used to log in to the Admin Dashboard.
        User::updateOrCreate(
            ['email' => 'admin@luxeora.com'],
            [
                'name'     => 'Admin',
                'password' => Hash::make('password'),
            ]
        );
    }
}
