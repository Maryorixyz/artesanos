<?php

namespace App\Http\Controllers\Invitado;
use App\Http\Controllers\Controller;
use App\Models\Asociacion;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class AsociacionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $asociaciones = Asociacion::with('imagenes')->get();

        $productos = Producto::with('imagenes', 'categorias', 'user.asociacion')->latest('id')->take(3)->get(); //Extrae los productos de la bd

        $categorias = Categoria::withCount('productos')->orderBy('productos_count', 'DESC')->limit(5)->get();

        return view('asociaciones', compact('asociaciones', 'productos', 'categorias'));
    }

    public function detalle($id)
    {

        $asociacion = Asociacion::where('id', $id)->with('imagenes', 'users')->firstOrFail();

        $productos = Producto::with('imagenes', 'categorias', 'user.asociacion')
            ->whereHas('user', function($q) use ($id){
                $q->where('asociacion_id', $id);
            })
            ->latest('id')->take(3)->get(); //Extrae los productos de la bd

        $categorias = Categoria::withCount('productos')->orderBy('productos_count', 'DESC')->limit(5)->get();

        return view('asociacion-detalle', compact('asociacion', 'productos', 'categorias'));
    }

    public function buscadorAsociaciones()
    {
        $buscadorAsociaciones = Asociacion::select('id', 'nombre')->get();
    
        return response()->json($buscadorAsociaciones);
    }
}