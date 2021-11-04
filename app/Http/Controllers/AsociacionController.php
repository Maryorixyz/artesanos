<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsociacionController extends Controller
{
    

    public function create(){
        return view('asociaciones.create');
    }

    public function show($asociacion){
        return view('asociaciones.show', compact('asociacion'));
    }
}