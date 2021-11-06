<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Producto::create([
            'nombre' => 'Mascara de Negrito',
            'descripcion' => 'Mascara Grande',
            'precio' => 120,
            'stock' => 10,
            'colores' => 'negro',
            'user_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Mascara Grande',
            'precio' => 120,
            'stock' => 10,
            'colores' => 'blanco',
            'user_id' => 1
        ]);

        DB::table('productos')->insert([
            ['user_id' => 1, 'nombre' => 'Mascara de Negrito' , 'descripcion' => 'Mascara Grande', 'precio' => 120, 'stock' => 10,'colores' => 'negro'],
            ['user_id' => 1, 'nombre' => 'Mascara de Corochano' , 'descripcion' => 'Mascara Grande', 'precio' => 120, 'stock' => 10,'colores' => 'blanco'],
        ]);
        
    }
}
