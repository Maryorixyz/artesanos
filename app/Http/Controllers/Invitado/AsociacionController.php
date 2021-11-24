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
    public function __invoke()
    {

        $asociaciones = Asociacion::with('imagenes')->get();

        return view('asociaciones', compact('asociaciones'));
    }
}