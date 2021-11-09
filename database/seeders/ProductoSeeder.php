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
        $producto = Producto::create([
            'nombre' => 'Mascara de Negrito',
            'descripcion' => 'Hecho de cuerina, barba de cola de vaca, perlas, ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'negro',
            'user_id' => 1
        ]);
        // Agregar imagenes
        $producto->imagenes()->create([
            'url' => 'productos/244466632_6257266250981309_3538745621928429614_n.jpg'
        ]);
        $producto->imagenes()->create([
            'url' => 'productos/244339550_6257264870981447_8362491361793996181_n.jpg'
        ]);
        $producto->imagenes()->create([
            'url' => 'productos/243819831_6257265540981380_7573648241688503420_n.jpg'
        ]);
        $producto->imagenes()->create([
            'url' => 'productos/243730873_6257266980981236_5772367078276017715_n.jpg'
        ]);


        Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Mascara Grande',
            'medidas' => 'Chico y Grande',
            'precio' => 70,
            'stock' => 10,
            'colores' => 'blanco',
            'user_id' => 1
        ]);

       // DB::table('productos')->insert([
         //   ['user_id' => 1, 'nombre' => 'Mascara de Negrito' , 'descripcion' => 'Mascara Grande', 'precio' => 120, 'stock' => 10,'colores' => 'negro'],
           // ['user_id' => 1, 'nombre' => 'Mascara de Corochano' , 'descripcion' => 'Mascara Grande', 'precio' => 120, 'stock' => 10,'colores' => 'blanco'],
        //]);
        
        Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de madera.',
            'medidas' => 'Grande',
            'precio' => 40,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Campana',
            'descripcion' => 'Hecho de brocas y campanita.',
            'medidas' => 'Chico y Grande',
            'precio' => 50,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Cotones',
            'descripcion' => 'Hecho de terciopelo, hilos de bordar,perlas carton duplex, cintas, botones y plecos.',
            'medidas' => 'Grande',
            'precio' => 5000,
            'stock' => 10,
            'colores' => 'Guinda, Rojo, Plateado, Turquesa',
            'user_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Mascara Negrito',
            'descripcion' => 'Hecho de biocuero, perlas, ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 90,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Mascara de corochano',
            'descripcion' => 'Hecho de biocuero, cola de ganado, perlas, ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 180,
            'stock' => 10,
            'colores' => 'Blanco',
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Mascarilla',
            'descripcion' => 'Hecho de biocuero, perlas y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Leva de niño',
            'descripcion' => 'Hecho de tornasolado, perlas, carton prensado 14 y forro de lamel',
            'medidas' => 'Chico',
            'precio' => 250,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 2
        ]);

        Producto::create([
            'nombre' => 'Coton de Ngritos',
            'descripcion' => 'Hecho de tornasol, perlas checas, grecas y terciopelo coreano',
            'medidas' => 'Chico y Grande',
            'precio' => 1500,
            'stock' => 10,
            'colores' => 'Morado, Rojo, Verde, Jade, Negro',
            'user_id' => 3
        ]);
      
        Producto::create([
            'nombre' => 'Coton de Corochano',
            'descripcion' => 'Hecho de tornasol, perlas checas, lagrimones y biocuero de lamel',
            'medidas' => 'Chico',
            'precio' => 1700,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 3
        ]);
        
        Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de cuerina, elastico, perlas, barba de pelos de cabra y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Macarilla de Negritos',
            'descripcion' => 'Hecho de cuerina, perlas, elastico y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de triple madera y pintado de barniz',
            'medidas' => 'Chico',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Mascarilla de tela',
            'descripcion' => 'Hecho de tela drill, algodon, hilo de bordar y elastico',
            'medidas' => 'Grande',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de cuero, perlas, barba de chivo, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Blanco',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de cuero, perlas, barba de chivo, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Polo',
            'descripcion' => 'Hecho de hilos de bordar y algodon Pique y Jersy',
            'medidas' => '14 a 2',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Rosado, azul, melanch, plomo rota y blanco',
            'user_id' => 4
        ]);

        Producto::create([
            'nombre' => 'Llaveros de Negritos Y Corochanos',
            'descripcion' => 'Hecho de ceramicas, acrilicos y barnizados',
            'medidas' => '-',
            'precio' => 6,
            'stock' => 10,
            'colores' => 'Negro y blanco',
            'user_id' => 5
        ]);

        Producto::create([
            'nombre' => 'Tazas',
            'descripcion' => 'Hecho de porcelana y sublimado',
            'medidas' => '-',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Modelos Variado',
            'user_id' => 5
        ]);
        
        Producto::create([
            'nombre' => 'Rompecabezas',
            'descripcion' => 'Hecho de carton prensado y MDF',
            'medidas' => '-',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Modelos Variado',
            'user_id' => 5
        ]);

        Producto::create([
            'nombre' => 'Mascarilla de Negritos ',
            'descripcion' => 'Hecho de cuerina, elastico, perlas y barba de tela de peluche',
            'medidas' => 'Chico y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Negro y blanco',
            'user_id' => 5
        ]);

        Producto::create([
            'nombre' => 'Mascarilla de Cocochano',
            'descripcion' => 'Hecho de cuerina, elastico, perlas y barba de tela de peluche',
            'medidas' => 'Chico y Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Negro y blanco',
            'user_id' => 5
        ]);

        Producto::create([
            'nombre' => 'Macara',
            'descripcion' => 'Hecho de biocuro, perlas, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 100,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 5
        ]);

        Producto::create([
            'nombre' => 'Polo',
            'descripcion' => 'Hecho de algodon de Jersy y sublimado',
            'medidas' => '4 a L',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Negro, rojo y blanco',
            'user_id' => 5
        ]);

        Producto::create([
            'nombre' => 'Polo 2',
            'descripcion' => 'Hecho de piel de durazno y sublimado',
            'medidas' => '4 a L',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Blanco, perla, rosado y celeste',
            'user_id' => 5
        ]);
    }
}
