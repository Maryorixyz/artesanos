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
            'descripcion' => 'Hecho de cuerina, barba de cola de vaca, perlas, ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'negro',
            'user_id' => 1
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

        Producto::create([
            'nombre' => 'Mascarilla de Negrito',
            'descripcion' => 'Hecho de biocuero, forro drill, perlas acrilicas, elastico y nariz de ceramica',
            'medidas' => 'Chico y Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 6
        ]);
        Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de biocuero, forro drill, perlas acrilicas, elastico, nariz de ceramica y pelaje  de baraba de chivo',
            'medidas' => 'Grande',
            'precio' => 35,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 6
        ]);
        Producto::create([
            'nombre' => 'Canasta',
            'descripcion' => 'Trupan MDF',
            'medidas' => 'Varios Tamaños',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 6
        ]);

        Producto::create([
            'nombre' => 'Rompecabezas',
            'descripcion' => 'Trupan MDF',
            'medidas' => 'Varios Tamaños',
            'precio' => 20,
            'stock' => 10,
            'colores' => 'Amarillo, azul, celeste, rosado',
            'user_id' => 6
        ]);

        Producto::create([
            'nombre' => 'Torre Eiffel',
            'descripcion' => 'Trupan MDF',
            'medidas' => 'Varios Tamaños',
            'precio' => 50,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 6
        ]);

        Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de Cuero Sintetico, perlas, barba de cola de ganado y ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 150,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 7
        ]);

        Producto::create([
            'nombre' => 'Mascara de Negrito',
            'descripcion' => 'Hecho de Cuero Sintetico, perlas de vidrio y ojos y nariz de madera',
            'medidas' => 'Chico y Grande',
            'precio' => 180,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 7
        ]);

        Producto::create([
            'nombre' => 'Muñeco de Negritos',
            'descripcion' => 'Hecho de hilo metalico, tela greca - mostacilla arrocillo, cuero sintetico y carton',
            'medidas' => 'Mediano',
            'precio' => 120,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 7
        ]);

        Producto::create([
            'nombre' => 'Matraca',
            'descripcion' => 'Hecho de tripley y engranaje de madera',
            'medidas' => 'Chico, Mediano y Grande',
            'precio' => 60,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 7
        ]);

        Producto::create([
            'nombre' => 'Botines',
            'descripcion' => 'Hecho de tela, hilo, mostacilla, lentejuelas, greca, aparado y perlas',
            'medidas' => 'Chico, Mediano y Grande',
            'precio' => 300,
            'stock' => 10,
            'colores' => 'Variados',
            'user_id' => 7
        ]);

        Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de marroqui, barba de cola de vaca, ojos y nariz de madera',
            'medidas' => 'Mediano',
            'precio' => 65,
            'stock' => 10,
            'colores' => 'Unico',
            'user_id' => 8
        ]);

        Producto::create([
            'nombre' => 'Mascara de Corochano',
            'descripcion' => 'Hecho de marroqui, barba de cola de vaca, ojos y nariz de madera',
            'medidas' => 'Mediano',
            'precio' => 65,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 8
        ]);

        Producto::create([
            'nombre' => 'Pañuelos',
            'descripcion' => 'Hecho de hilos metalicos, piedras metalicas, grecas, perlas y tela lame',
            'medidas' => 'Mediano',
            'precio' => 15,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 8
        ]);

        Producto::create([
            'nombre' => 'Faja',
            'descripcion' => 'Hecho de tela lame, mostacilla, hilos y piedras metalicos',
            'medidas' => 'Grande',
            'precio' => 35,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 8
        ]);

        Producto::create([
            'nombre' => 'Botas de Negritos',
            'descripcion' => 'Hecho de carnaza, tela polinam, ojalillos, ganchos, hilos y perlas',
            'medidas' => 'Chico y Grande',
            'precio' => 400,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 9
        ]);

        Producto::create([
            'nombre' => 'Zapatillas de Dama',
            'descripcion' => 'Hecho de microfibra, planta de goma parzon, pasador, malla pixel y polinam',
            'medidas' => '35-38',
            'precio' => 45,
            'stock' => 10,
            'colores' => 'Blanco, pseudo-rosa y negro',
            'user_id' => 9
        ]);

        Producto::create([
            'nombre' => 'Zapatillas de Varón',
            'descripcion' => 'Hecho de cuero, planta de caucho y polinam',
            'medidas' => '38-42',
            'precio' => 60,
            'stock' => 10,
            'colores' => 'Blanco y negro',
            'user_id' => 9
        ]);

        Producto::create([
            'nombre' => 'Corte para Botas',
            'descripcion' => 'Hecho de terciopelo, perlas y poliseda',
            'medidas' => 'Chico y Grande',
            'precio' => 200,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 9
        ]);

        Producto::create([
            'nombre' => 'Mascarilla de Corochano',
            'descripcion' => 'Hecho de tela de lino sintetico, forro de esponja laminada, perlas y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 25,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        Producto::create([
            'nombre' => 'Mascarilla de Negritos',
            'descripcion' => 'Hecho de tela de lino sintetico, forro de esponja laminada, perlas y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        Producto::create([
            'nombre' => 'Mascarilla Amarilis y Bordado',
            'descripcion' => 'Hecho de tela de algodon, elastico, bordado computalizado y forro de esponja laminada',
            'medidas' => 'Grande',
            'precio' => 10,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        Producto::create([
            'nombre' => 'Michi',
            'descripcion' => 'Hecho de terciopelo, carton prensado, hilos bañados de oro, perlas y lentejuelas',
            'medidas' => 'Grande',
            'precio' => 30,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        Producto::create([
            'nombre' => 'Mascara de Negritos',
            'descripcion' => 'Hecho de badana, perlas, ojos y nariz de madera',
            'medidas' => 'Grande',
            'precio' => 110,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);

        Producto::create([
            'nombre' => 'Botas',
            'descripcion' => 'Hecho de terciopelo, carton prensado, hilos bañados en oro, piedras, lentejuelas, mostacilla y grecas',
            'medidas' => 'Grande',
            'precio' => 350,
            'stock' => 10,
            'colores' => 'Variado',
            'user_id' => 10
        ]);
    }
}
