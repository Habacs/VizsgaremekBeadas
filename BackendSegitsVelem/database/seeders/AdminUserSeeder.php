<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@email.com'],
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('admin123'), 
                'is_admin' => true,
            ]
        );
    }
}
