<?php

namespace Database\Seeders;

use App\Models\Asociacion;
use Illuminate\Database\Seeder;

class AsociacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asociacion = Asociacion::create([
            'nombre' => 'ARABOR-HCO',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum eum sunt, dolor debitis deserunt beatae possimus placeat doloribus saepe, facilis, velit minima dignissimos reiciendis? Incidunt, nam ab. Expedita, fugit inventore?',
        ]);

        $asociacion->imagenes()->create([
            'url' => 'storage/asociaciones/blog-04.jpg'
        ]);

        $asociacion = Asociacion::create([
            'nombre' => 'Asociacion 2',
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum eum sunt, dolor debitis deserunt beatae possimus placeat doloribus saepe, facilis, velit minima dignissimos reiciendis? Incidunt, nam ab. Expedita, fugit inventore?',
        ]);

        $asociacion->imagenes()->create([
            'url' => 'storage/asociaciones/blog-03.jpg'
        ]);
    }
}
