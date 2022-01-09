<?php

namespace App\Http\Controllers\Invitado;
use App\Http\Controllers\Controller;
use App\Models\Asociacion;
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

        return view('asociaciones', compact('asociaciones'));
    }

    public function detalle($id)
    {

        $asociacion = Asociacion::where('id', $id)->with('imagenes')->firstOrFail();

        return view('asociacion-detalle', compact('asociacion'));
    }

    public function buscadorAsociaciones()
    {
        $buscadorAsociaciones = Asociacion::select('id', 'nombre')->get();
    
        return response()->json($buscadorAsociaciones);
    }
}