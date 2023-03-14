<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Alice Lee',
            'email' => 'alice.lee@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'David Wang',
            'email' => 'david.wang@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Megan Brown',
            'email' => 'megan.brown@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Oliver Davis',
            'email' => 'oliver.davis@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Sophie Wilson',
            'email' => 'sophie.wilson@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Peter Johnson',
            'email' => 'peter.johnson@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
