<?php

namespace App\Http\Controllers\Invitado;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function detalle($id)
    {

        $producto = Producto::with('imagenes', 'categorias')->findOrFail($id);

        $categoriasProducto = $producto->categorias->pluck('id');

        $productosRelacionados = Producto::with('imagenes', 'user')->whereHas('categorias', function($query) use($categoriasProducto) {
            $query->whereIn('id', $categoriasProducto);
        })->limit(8)->get();
        

        return view('producto-detalle', compact('producto', 'productosRelacionados'));
    }

    public function obtenerFavoritos(Request $request)
    {

        $productos = Producto::with('imagenes')->whereIn('id', $request->favoritos)->get();

        return response()->json($productos);

    }
}
