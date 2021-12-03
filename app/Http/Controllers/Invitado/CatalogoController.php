<?php

namespace App\Http\Controllers\Invitado;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $productos = Producto::with('imagenes', 'categorias', 'user.asociacion')->offset(0)->limit(24)->get(); //Extrae los productos de la bd

        $categorias = Categoria::withCount('productos')->orderBy('productos_count', 'DESC')->limit(5)->get();

        $cantidad_de_productos = Producto::count();

        
        
        return view('catalogo', compact('productos', 'categorias' , 'cantidad_de_productos'));
    }

    public function productos($inicio)
    {

        $productos = Producto::with('imagenes', 'categorias', 'user')->offset($inicio)->limit(8)->get(); //Extrae los productos de la bd

        return response()->json($productos);
    }
}