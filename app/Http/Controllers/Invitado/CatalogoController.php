<?php

namespace App\Http\Controllers\Invitado;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {

        $productos = Producto::all(); //Extrae los productos de la bd

        return view('catalogo', compact('productos'));
    }
}