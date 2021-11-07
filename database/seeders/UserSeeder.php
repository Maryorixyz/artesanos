<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alicia Aida Reynaga Fabian 13',
            'email' => 'artesano13@gmail.com',
            'password' => Hash::make('artesano13'),
        ]);

        User::create([
            'name' => 'Gloria Nieto Santamaria 24',
            'email' => 'artesano24@gmail.com',
            'password' => Hash::make('artesano24'),
        ]);

        User::create([
            'name' => 'Jose Luis Manuel Nieto 4',
            'email' => 'artesano4@gmail.com',
            'password' => Hash::make('artesano4'),
        ]);

        User::create([
            'name' => 'Edwin Ventura Casimiro 23',
            'email' => 'artesano23@gmail.com',
            'password' => Hash::make('artesano23'),
        ]);

        User::create([
            'name' => 'Hilda FeliX Huanuco 21',
            'email' => 'artesano21@gmail.com',
            'password' => Hash::make('artesano21'),
        ]);
    }
}
