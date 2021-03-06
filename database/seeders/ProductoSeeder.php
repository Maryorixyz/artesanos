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
        
        $producto->categorias()->sync([1, 2, 9]);
        // Agregar imagenes
        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.54 PM (3).jpg'
        ]);
        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.54 PM (4).jpg'
        ]);
        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.55 PM (1).jpg'
        ]);
        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.55 PM.jpg'
        ]);


        $producto=Producto::create([
            
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Mascara Grande',
            'medidas' => 'Chico y Grande',
            'precio' => 70,
            'stock' => 10,
            'colores' => 'blanco',
            'user_id' => 1
        ]);
        
        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.53 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.54 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.54 PM.jpg'
        ]);

       // DB::table('productos')->insert([
         //   ['user_id' => 1, 'nombre' => 'Mascara de Negrito' , 'descripcion' => 'Mascara Grande', 'precio' => 120, 'stock' => 10,'colores' => 'negro'],
           // ['user_id' => 1, 'nombre' => 'Mascara de Corochano' , 'descripcion' => 'Mascara Grande', 'precio' => 120, 'stock' => 10,'colores' => 'blanco'],
        //]);
        
        $producto=Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de madera.',
            'medidas' => 'Grande',
            'precio' => 40,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 1
        ]);
        
        $producto->categorias()->sync([2, 7]);
        
        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.56 PM (3).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Campana',
            'descripcion' => 'Hecho de brocas y campanita.',
            'medidas' => 'Chico y Grande',
            'precio' => 50,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 1
        ]);
        
        $producto->categorias()->sync([2, 11]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.56 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Cotones',
            'descripcion' => 'Hecho de terciopelo, hilos de bordar,perlas carton duplex, cintas, botones y plecos.',
            'medidas' => 'Grande',
            'precio' => 5000,
            'stock' => 10,
            'colores' => 'Guinda, Rojo, Plateado, Turquesa',
            'user_id' => 1
        ]);
        
        $producto->categorias()->sync([2, 6]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.57 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.57 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara Negrito',
            'descripcion' => 'Hecho de biocuero, perlas, ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 90,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 2
        ]);
        
        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.16 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de corochano',
            'descripcion' => 'Hecho de biocuero, cola de ganado, perlas, ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 180,
            'stock' => 10,
            'colores' => 'Blanco',
            'user_id' => 2
        ]);
        
        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.16 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Negritos',
            'descripcion' => 'Hecho de biocuero, perlas y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 2
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.17 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.17 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.17 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Leva de ni??o',
            'descripcion' => 'Hecho de tornasolado, perlas, carton prensado 14 y forro de lamel',
            'medidas' => 'Chico',
            'precio' => 250,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 2
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.18 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Coton de Ngritos',
            'descripcion' => 'Hecho de tornasol, perlas checas, grecas y terciopelo coreano',
            'medidas' => 'Chico y Grande',
            'precio' => 1500,
            'stock' => 10,
            'colores' => 'Morado, Rojo, Verde, Jade, Negro',
            'user_id' => 3
        ]);

        $producto->categorias()->sync([2, 6]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.41 PM.jpg'
        ]);
      
        $producto=Producto::create([
            'nombre' => 'Coton de Corochano',
            'descripcion' => 'Hecho de tornasol, perlas checas, lagrimones y biocuero de lamel',
            'medidas' => 'Chico',
            'precio' => 1700,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 3
        ]);

        $producto->categorias()->sync([2, 6]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 9.01.42 PM.jpg'
        ]);
        
        $producto=Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de cuerina, elastico, perlas, barba de pelos de cabra y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.00.58 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Negritos',
            'descripcion' => 'Hecho de cuerina, perlas, elastico y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.00.57 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de triple madera y pintado de barniz',
            'medidas' => 'Chico',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([2, 7]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.01.00 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de tela',
            'descripcion' => 'Hecho de tela drill, algodon, hilo de bordar y elastico',
            'medidas' => 'Grande',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.01.00 AM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.01.00 AM (3).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de cuero, perlas, barba de chivo, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Blanco',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.01.01 AM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de cuero, perlas, barba de chivo, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.01.00 AM (7).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Polo',
            'descripcion' => 'Hecho de hilos de bordar y algodon Pique y Jersy',
            'medidas' => '14 a 2',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Rosado, azul, melanch, plomo rota y blanco',
            'user_id' => 4
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.00.59 AM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.00.59 AM (4).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.00.58 AM (3).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Llaveros de Negritos Y Corochanos',
            'descripcion' => 'Hecho de ceramicas, acrilicos y barnizados',
            'medidas' => '-',
            'precio' => 6,
            'stock' => 10,
            'colores' => 'Negro y blanco',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.39 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.38 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.38 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.39 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Tazas',
            'descripcion' => 'Hecho de porcelana y sublimado',
            'medidas' => '-',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Modelos Variado',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.40 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.39 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.39 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.40 PM (2).jpg'
        ]);
        
       $producto=Producto::create([
            'nombre' => 'Rompecabezas',
            'descripcion' => 'Hecho de carton prensado y MDF',
            'medidas' => '-',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Modelos Variado',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([3,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.42 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.41 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.40 PM (3).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Cocochano',
            'descripcion' => 'Hecho de cuerina, elastico, perlas y barba de tela de peluche',
            'medidas' => 'Chico y Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Negro y blanco',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.44 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.43 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de biocuro, perlas, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 100,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.43 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Polo',
            'descripcion' => 'Hecho de algodon de Jersy y sublimado',
            'medidas' => '4 a L',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Negro, rojo y blanco',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.45 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.02.59 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.03.00 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Polo 2',
            'descripcion' => 'Hecho de piel de durazno y sublimado',
            'medidas' => '4 a L',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Blanco, perla, rosado y celeste',
            'user_id' => 5
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.03.01 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.03.02 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Negrito',
            'descripcion' => 'Hecho de biocuero, forro drill, perlas acrilicas, elastico y nariz de ceramica',
            'medidas' => 'Chico y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 6
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.35 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.36 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 7.10.05 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 6.51.35 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de biocuero, forro drill, perlas acrilicas, elastico, nariz de ceramica y pelaje  de baraba de chivo',
            'medidas' => 'Grande',
            'precio' => 35,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 6
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 7.10.05 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.34 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 4.20.42 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 7.10.06 PM (4).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Canasta',
            'descripcion' => 'Trupan MDF',
            'medidas' => 'Varios Tama??os',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 6
        ]);

        $producto->categorias()->sync([3,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 7.10.05 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.32 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Rompecabezas',
            'descripcion' => 'Trupan MDF',
            'medidas' => 'Varios Tama??os',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Amarillo, azul, celeste, rosado',
            'user_id' => 6
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.29 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.30 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.31 PM (3).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Torre Eiffel',
            'descripcion' => 'Trupan MDF',
            'medidas' => 'Varios Tama??os',
            'precio' => 50,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 6
        ]);

        $producto->categorias()->sync([3,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.33 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.33 PM (4).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.04.33 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 4.20.42 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de Cuero Sintetico, perlas, barba de cola de ganado y ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 7
        ]);

        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.31 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de Cuero Sintetico, perlas de vidrio y ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 180,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 7
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.32 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mu??eco de Negritos',
            'descripcion' => 'Hecho de hilo metalico, tela greca - mostacilla arrocillo, cuero sintetico y carton',
            'medidas' => 'Mediano',
            'precio' => 120,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 7
        ]);

        $producto->categorias()->sync([3,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.31 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.35 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de tripley y engranaje de madera',
            'medidas' => 'Chico, Mediano y Grande',
            'precio' => 60,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 7
        ]);

        $producto->categorias()->sync([2, 7]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.32 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.33 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.33 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Botines',
            'descripcion' => 'Hecho de tela, hilo, mostacilla, lentejuelas, greca, aparado y perlas',
            'medidas' => 'Chico, Mediano y Grande',
            'precio' => 300,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 7
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.34 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.55.34 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de marroqui, barba de cola de vaca, ojos y nariz de madera',
            'medidas' => 'Mediano',
            'precio' => 65,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 8
        ]);

        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.58 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Pa??uelos',
            'descripcion' => 'Hecho de hilos metalicos, piedras metalicas, grecas, perlas y tela lame',
            'medidas' => 'Mediano',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 8
        ]);

        $producto->categorias()->sync([8,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.59 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.27.02 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.27.00 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.27.00 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Faja',
            'descripcion' => 'Hecho de tela lame, mostacilla, hilos y piedras metalicos',
            'medidas' => 'Grande',
            'precio' => 35,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 8
        ]);

        $producto->categorias()->sync([2,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.58 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.26.58 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Botas de Negritos',
            'descripcion' => 'Hecho de carnaza, tela polinam, ojalillos, ganchos, hilos y perlas',
            'medidas' => 'Chico y Grande',
            'precio' => 400,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 9
        ]);

        $producto->categorias()->sync([2,4]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.36 AM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.36 AM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.37 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Zapatillas de Dama',
            'descripcion' => 'Hecho de microfibra, planta de goma parzon, pasador, malla pixel y polinam',
            'medidas' => '35-38',
            'precio' => 45,
            'stock' => 10,
            'colores' => 'Blanco, pseudo-rosa y negro',
            'user_id' => 9
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.37 AM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.37 AM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.38 AM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.38 AM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Zapatillas de Var??n',
            'descripcion' => 'Hecho de cuero, planta de caucho y polinam',
            'medidas' => '38-42',
            'precio' => 60,
            'stock' => 10,
            'colores' => 'Blanco y negro',
            'user_id' => 9
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.40 AM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.39 AM (5).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.41 AM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.11.11 AM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Corte para Botas',
            'descripcion' => 'Hecho de terciopelo, perlas y poliseda',
            'medidas' => 'Chico y Grande',
            'precio' => 200,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 9
        ]);

        $producto->categorias()->sync([2,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.10.42 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de tela de lino sintetico, forro de esponja laminada, perlas y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.39 AM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.39 AM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.37 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Negritos',
            'descripcion' => 'Hecho de tela de lino sintetico, forro de esponja laminada, perlas y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.36 AM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.36 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla Amarilis y Bordado',
            'descripcion' => 'Hecho de tela de algodon, elastico, bordado computalizado y forro de esponja laminada',
            'medidas' => 'Grande',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.38 AM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Michi',
            'descripcion' => 'Hecho de terciopelo, carton prensado, hilos ba??ados de oro, perlas y lentejuelas',
            'medidas' => 'Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        $producto->categorias()->sync([3,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.38 AM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de badana, perlas, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 110,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.39 AM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.39 AM (5).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Botas',
            'descripcion' => 'Hecho de terciopelo, carton prensado, hilos ba??ados en oro, piedras, lentejuelas, mostacilla y grecas',
            'medidas' => 'Grande',
            'precio' => 350,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        $producto->categorias()->sync([2,4]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.40 AM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.40 AM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-27 at 8.06.40 AM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Matracas',
            'descripcion' => 'Hecho de madera barnizado',
            'medidas' => 'Peque??o',
            'precio' => 35,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 12
        ]);

        $producto->categorias()->sync([2, 7]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.00 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de cuerina enfranelado, enperlado de vidrio, nariz y ojos de madera',
            'medidas' => 'Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Rojo o Azul',
            'user_id' => 12
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.01 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.01 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de cuerina enfranelado, enperlado de vidrio, barba de cola de toro, nariz y ojos de madera',
            'medidas' => 'Grande',
            'precio' => 200,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 12
        ]);

        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.02 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mu??eco',
            'descripcion' => 'Hecho de alambre, relleno de esponja, tela, perlas y grecas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 12
        ]);

        $producto->categorias()->sync([3,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.03 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.00 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.04 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.02 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla',
            'descripcion' => 'Hecho de tela drill, tres capas, notex y dise??o de maquina coputalizada',
            'medidas' => 'Peque??o y Grande',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Blanco, rojo, negro y morado',
            'user_id' => 12
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.03 PM (4).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Fajas',
            'descripcion' => 'Hecho de terciopelo, hilos metalicos y perlas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 12
        ]);

        $producto->categorias()->sync([2,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.04 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.40.05 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negrito',
            'descripcion' => 'Hecho de biocuero y perlas doradas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 120,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 13
        ]);

        $producto->categorias()->sync([1,2,9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.51.38 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Pa??uelos',
            'descripcion' => 'Hecho de corrospun, hilo de bordar y grecas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 13
        ]);

        $producto->categorias()->sync([8,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.51.38 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Botas',
            'descripcion' => 'Hecho de terciopelo, hilo de bordar y biocuero',
            'medidas' => 'Peque??o y Grande',
            'precio' => 250,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 13
        ]);

        $producto->categorias()->sync([2,4]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.51.39 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de biocuero y perlas doradas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 80,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 14
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.48.25 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Cotones',
            'descripcion' => 'Hecho de tela terciopelo, perlas, piedras brillantes y lentejuelas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 1500,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 14
        ]);

        $producto->categorias()->sync([2, 6]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.48.25 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.48.25 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.48.26 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.48.27 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de madera y pintada',
            'medidas' => 'Peque??o y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 14
        ]);

        $producto->categorias()->sync([2, 7]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.48.25 PM (3).jpg'
        ]);
        
        $producto=Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de tela, nariz de madera, barba tela peluche o pelo de chivo, perlas, mostacilla y forrado polipima',
            'medidas' => 'Peque??o y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Blanco',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.09 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.09 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.09 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascarilla de Negritos',
            'descripcion' => 'Hecho de tela, nariz de madera, barba tela peluche o pelo de chivo, perlas, mostacilla y forrado polipima',
            'medidas' => 'Peque??o y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Negro',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([5,12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.10 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.09 PM (4).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.10 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.10 PM (5).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Gorras',
            'descripcion' => 'Hecho de tela drill, bordado en maquina computalizadacon hilos de colores',
            'medidas' => 'Peque??o y Grande',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Blanco, Negro, Rosado Bebe, azulino, azul presidencial y verde Jade',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.11 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.10 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.11 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.10 PM (4).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de adornos con perlas, barba de cola de ganado, nariz y ojos de madera ',
            'medidas' => 'Peque??o y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([1, 2, 10]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.12 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.12 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.13 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.12 PM (4).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de adornos con perlas, nariz y ojos de madera ',
            'medidas' => 'Peque??o y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([1, 2, 9]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.13 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.13 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.14 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.12 PM (4).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Matracas',
            'descripcion' => 'Hecho de madera, esmalte y barnizado',
            'medidas' => 'Peque??o, Mediano y Grande',
            'precio' => 35,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([2, 7]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.14 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.15 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.29.15 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.30.17 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Botas',
            'descripcion' => 'Hecho de mTela terciopelo, hilo dorado, adornado con perlas, mostacilla y lentejuelas',
            'medidas' => 'Peque??o y Grande',
            'precio' => 300,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 15
        ]);

        $producto->categorias()->sync([2, 4]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-21 at 8.35.56 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Ceramicas Corochano y Negritos',
            'descripcion' => 'Hecho de ceramica al frio o en horno y pintura acrilica',
            'medidas' => 'Peque??o',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Unicos',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.34 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Recordatorio',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Peque??o',
            'precio' => 18,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.37 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.38 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.38 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Florero',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Peque??o',
            'precio' => 5,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.37 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Cajitas',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Peque??o',
            'precio' => 5,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.35 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.35 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.35 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.37 PM.jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Caja de Paneton',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Mediano',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.39 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.38 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.40 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.39 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Porta Vinos',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Mediano',
            'precio' => 7,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.40 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.37 PM (3).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.37 PM (4).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Caja para Cerveza',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Mediano',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.00.41 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.37 PM (2).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.37 PM (1).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Trapecista',
            'descripcion' => 'Hecho de materiales MDF con hornos y con lacer',
            'medidas' => 'Chico',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([3, 12]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.39 PM (1).jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.39 PM.jpg'
        ]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.38 PM (2).jpg'
        ]);

        $producto=Producto::create([
            'nombre' => 'Botas',
            'descripcion' => 'Hecho de tela terciopelo, hilo dorado, piedras brillantes y perlas',
            'medidas' => 'Chico',
            'precio' => 350,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 16
        ]);

        $producto->categorias()->sync([2, 4]);

        $producto->imagenes()->create([
            'url' => 'storage/productos/WhatsApp Image 2021-09-23 at 10.01.41 PM.jpg'
        ]);
    }
}
