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
            'sexo' => 'F',
            'empresa' => 'Bordaduria San Miguel',
            'telefono'=>'962609225',
            'direccion'=>'Av. Esteban Pabletich Mz I Lt-3',
            'password' => Hash::make('artesano13'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Gloria Nieto Santamaria',
            'email' => 'artesano24@gmail.com',
            'sexo' => 'F',
            'empresa' => 'Bordduria Manuelitos',
            'telefono'=>'976700788',
            'direccion'=>'Jr. Majes Mz C Tc-9',
            'password' => Hash::make('artesano24'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Jose Luis Manuel Nieto',
            'email' => 'artesano4@gmail.com',
            'sexo' => 'M',
            'empresa' => '  Bordaduria Manuelito',
            'telefono'=>'931058027',
            'direccion'=>'-',
            'password' => Hash::make('artesano4'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Edwin Ventura Casimiro',
            'email' => 'artesano23@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Bordados Y Confecciones Ventura',
            'telefono'=>'979992185',
            'direccion'=>'Jr. Pastasa Mz I Lte-7',
            'password' => Hash::make('artesano23'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Hilda FeliX Huanuco',
            'email' => 'artesano21@gmail.com',
            'sexo' => 'F',
            'empresa' => 'Bordaduria y Confecciones Hilda',
            'telefono'=>'918350147',
            'direccion'=>'Jr. Carlos Augusto Salaverri MZ W LTe-2',
            'password' => Hash::make('artesano21'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Ines Falcon Molina',
            'email' => 'artesano36@gmail.com',
            'sexo' => 'F',
            'empresa' => 'Artesanias y Bordaduria Abel e Ines',
            'telefono'=>'986923095',
            'direccion'=>'Jr. Abrahan Valdelomar Mz T Lte-4',
            'password' => Hash::make('artesano36'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Ivan Sacramento Ramirez',
            'email' => 'artesano3@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Bordaduria Amarilis',
            'telefono'=>'916027931',
            'direccion'=>'Jr. Los Anceles Mz C Lte-4 Pillco Marca',
            'password' => Hash::make('artesano3'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Lusmila Gonzales Rumi',
            'email' => 'artesano12@gmail.com',
            'sexo' => 'F',
            'empresa' => 'Bordaduria Xiamira',
            'telefono'=>'991731453',
            'direccion'=>'Jr. Perene Mz O Lte-8',
            'password' => Hash::make('artesano12'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Walter Bonilla Basilio',
            'email' => 'artesano37@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Artesanias y Calzados Monthana',
            'telefono'=>'921001910',
            'direccion'=>'Jr. Los Alisos con Jr. Pillco Marca 201',
            'password' => Hash::make('artesano37'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Fernando Alfredo Aguirre Valdivia',
            'email' => 'artesano35@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Bordaduria Niño Jesús',
            'telefono'=>'937614190',
            'direccion'=>'Jr. Perene Mz O Lte-7',
            'password' => Hash::make('artesano35'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Usuario de prueba',
            'email' => 'prueba@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Municipalidad de Amarilis',
            'telefono'=>'999999999',
            'direccion'=>'-',
            'password' => Hash::make('123456789'),
        ])->syncRoles(['Admin']);
        
        User::create([
            'name' => 'Erlandez Ortiz Santacruz',
            'email' => 'artesano2@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Bordaduria Ortíz',
            'telefono'=>'962076778',
            'direccion'=>'Jr. Estaban Pabletich 337',
            'password' => Hash::make('artesano2'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Jerson Emer Duran Vara',
            'email' => 'artesano25@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Bordaduria San Cristobal',
            'telefono'=>'973961969',
            'direccion'=>'-',
            'password' => Hash::make('artesano25'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Gianina Vanesa Ayala Rosales',
            'email' => 'artesano5@gmail.com',
            'sexo' => 'F',
            'empresa' => 'Bordaduria Milagros',
            'telefono'=>'943703211',
            'direccion'=>'Jr. Pataza Mz T Lte--5',
            'password' => Hash::make('artesano5'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Clérigos Ventura Casimiro',
            'email' => 'artesano1@gmail.com',
            'sexo' => 'M',
            'empresa' => 'Bordaduria Corana Del Inca',
            'telefono'=>'962526589',
            'direccion'=>'Jr. Mantaro Mz 2 Lte-3',
            'password' => Hash::make('artesano1'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);

        User::create([
            'name' => 'Miguel Ángel Vilca Ramírez',
            'email' => 'artesano16@gmail.com',
            'sexo' => 'M',
            'empresa' => '-',
            'telefono'=>'995592623',
            'direccion'=>'Jr. Junin 172',
            'password' => Hash::make('artesano16'),
            'asociacion_id' => 1,
        ])->syncRoles(['Artesano']);
        
    }
}
