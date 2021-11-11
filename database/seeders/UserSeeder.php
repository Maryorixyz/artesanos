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
            'name' => 'Usuario de prueba',
            'email' => 'prueba@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        User::create([
            'name' => 'Alicia Aida Reynaga Fabian',
            'email' => 'artesano13@gmail.com',
            'password' => Hash::make('artesano13'),
        ]);

        User::create([
            'name' => 'Gloria Nieto Santamaria',
            'email' => 'artesano24@gmail.com',
            'password' => Hash::make('artesano24'),
        ]);

        User::create([
            'name' => 'Jose Luis Manuel Nieto',
            'email' => 'artesano4@gmail.com',
            'password' => Hash::make('artesano4'),
        ]);

        User::create([
            'name' => 'Edwin Ventura Casimiro',
            'email' => 'artesano23@gmail.com',
            'password' => Hash::make('artesano23'),
        ]);

        User::create([
            'name' => 'Hilda FeliX Huanuco',
            'email' => 'artesano21@gmail.com',
            'password' => Hash::make('artesano21'),
        ]);

        User::create([
            'name' => 'Ines Falcon Molina',
            'email' => 'artesano36@gmail.com',
            'password' => Hash::make('artesano36'),
        ]);

        User::create([
            'name' => 'Ivan Sacramento Ramirez',
            'email' => 'artesano3@gmail.com',
            'password' => Hash::make('artesano3'),
        ]);

        User::create([
            'name' => 'Lusmila Gonzales Rumi',
            'email' => 'artesano12@gmail.com',
            'password' => Hash::make('artesano12'),
        ]);

        User::create([
            'name' => 'Walter Bonilla Basilio',
            'email' => 'artesano37@gmail.com',
            'password' => Hash::make('artesano37'),
        ]);

        User::create([
            'name' => 'Fernando Alfredo Aguirre Valdivia',
            'email' => 'artesano35@gmail.com',
            'password' => Hash::make('artesano35'),
        ]);

    }
}
