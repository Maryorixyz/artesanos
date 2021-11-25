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
            'name' => 'Alicia Aida Reynaga Fabian',
            'email' => 'artesano13@gmail.com',
            'password' => Hash::make('artesano13'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Gloria Nieto Santamaria',
            'email' => 'artesano24@gmail.com',
            'password' => Hash::make('artesano24'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Jose Luis Manuel Nieto',
            'email' => 'artesano4@gmail.com',
            'password' => Hash::make('artesano4'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Edwin Ventura Casimiro',
            'email' => 'artesano23@gmail.com',
            'password' => Hash::make('artesano23'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Hilda FeliX Huanuco',
            'email' => 'artesano21@gmail.com',
            'password' => Hash::make('artesano21'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Ines Falcon Molina',
            'email' => 'artesano36@gmail.com',
            'password' => Hash::make('artesano36'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Ivan Sacramento Ramirez',
            'email' => 'artesano3@gmail.com',
            'password' => Hash::make('artesano3'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Lusmila Gonzales Rumi',
            'email' => 'artesano12@gmail.com',
            'password' => Hash::make('artesano12'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Walter Bonilla Basilio',
            'email' => 'artesano37@gmail.com',
            'password' => Hash::make('artesano37'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Fernando Alfredo Aguirre Valdivia',
            'email' => 'artesano35@gmail.com',
            'password' => Hash::make('artesano35'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Usuario de prueba',
            'email' => 'prueba@gmail.com',
            'password' => Hash::make('123456789'),
        ])->syncRoles(['Admin']);
        
        User::create([
            'name' => 'Erlandez Ortiz Santacruz',
            'email' => 'artesano2@gmail.com',
            'password' => Hash::make('artesano2'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Jerson Emer Duran Vara',
            'email' => 'artesano25@gmail.com',
            'password' => Hash::make('artesano25'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Gianina Vanesa Ayala Rosales',
            'email' => 'artesano5@gmail.com',
            'password' => Hash::make('artesano5'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Clérigos Ventura Casimiro',
            'email' => 'artesano1@gmail.com',
            'password' => Hash::make('artesano1'),
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Miguel Ángel Vilca Ramírez',
            'email' => 'artesano16@gmail.com',
            'password' => Hash::make('artesano16'),
        ])->syncRoles(['Artesano']);
        
    }
}
