<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'aga',
            'email' => 'aga@gmail.com',
            'password' => Hash::make('agakeren0104'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'dwika',
            'email' => 'dwika@gmail.com',
            'password' => Hash::make('dwika123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'nino',
            'email' => 'nino@gmail.com',
            'password' => Hash::make('nino123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'azzam',
            'email' => 'azzam@gmail.com',
            'password' => Hash::make('azzam123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'zidan',
            'email' => 'zidan@gmail.com',
            'password' => Hash::make('zidan123'),
            'role' => 'admin',
        ]);
    }
}

