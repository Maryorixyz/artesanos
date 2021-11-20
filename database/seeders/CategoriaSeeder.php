<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['descripcion' => 'Mascaras', 'slug' => 'mascaras'],                                    // 1
            ['descripcion' => 'Indumentarias', 'slug' => 'indumentarias'],                          // 2
            ['descripcion' => 'Artesanias', 'slug' => 'artesanias'],                                // 3
            ['descripcion' => 'Botas', 'slug' => 'botas'],                                          // 4
            ['descripcion' => 'Mascarillas', 'slug' => 'mascarillas'],                              // 5
            ['descripcion' => 'Cotones', 'slug' => 'cotones'],                                      // 6
            ['descripcion' => 'Matracas', 'slug' => 'matracas'],                                    // 7
            ['descripcion' => 'Pañuelos', 'slug' => 'pañuelos'],                                    // 8
            ['descripcion' => 'Mascaras de Negritos', 'slug' => 'mascaras-de-negritos'],            // 9
            ['descripcion' => 'Mascaras de Corochanos', 'slug' => 'mascaras-de-corochanos'],        // 10
            ['descripcion' => 'Campanas', 'slug' => 'campanas'],                                    // 11
        ]);
    }
}
