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

        $productos = Producto::with('categorias')->offset(0)->limit(16)->get(); //Extrae los productos de la bd

        $categorias = Categoria::withCount('productos')->orderBy('productos_count', 'DESC')->limit(4)->get();

        
        return view('catalogo', compact('productos', 'categorias'));
    }

    public function productos()
    {

        $productos = Producto::with('imagenes')->offset(16)->limit(8)->get(); //Extrae los productos de la bd

        return response()->json($productos);
    }
}