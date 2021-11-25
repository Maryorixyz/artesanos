<?php

namespace App\Http\Controllers\Invitado;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {

        $productos = Producto::latest('id')->take(16)->get(); //Extrae los productos de la bd

        $asociaciones = 'Asociacion 1';

        return view('welcome', compact('productos', 'asociaciones'));
    }
}