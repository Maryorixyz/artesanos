<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Asociacion;

class AsociacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asociaciones = Asociacion::all();
        return view('admin.asociacion.index', compact('asociaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.asociacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'

        ]);
        $asociacion = Asociacion::create( $request->all());
        return redirect()->route('admin.asociacion.edit', $asociacion)->with('info', 'La Asociación se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Asociacion $asociacion)
    {
        return view('admin.asociacion.show', compact('asociacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Asociacion $asociacion)
    {
        return view('admin.asociacion.edit', compact('asociacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asociacion $asociacion)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'

        ]);

        $asociacion->update($request->all());
        return redirect()->route('admin.asociacion.edit', $asociacion)->with('info', 'La Asociación se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asociacion $asociacion)
    {
        $asociacion->delete();
        return redirect()->route('admin.asociacion.index')->with('info', 'La Asociación se elimino con exito');
    }
}
