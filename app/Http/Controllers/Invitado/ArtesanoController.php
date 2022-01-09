<?php

namespace App\Http\Controllers\Invitado;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;

class ArtesanoController extends Controller
{
    public function perfil($id)
    {

        $artesano = User::with('productos')->findOrFail($id);
        
        return view('artesano-perfil', compact('artesano'));
    }
}
