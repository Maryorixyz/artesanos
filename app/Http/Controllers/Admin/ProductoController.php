<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.producto.index')->only('index');
        $this->middleware('can:admin.producto.create')->only('create', 'store');
        $this->middleware('can:admin.producto.edit')->only('edit','update');
        $this->middleware('can:admin.producto.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roles = auth()->user()->getRoleNames();

        $isAdmin = false;

        foreach ($roles as $rol) {
            
            if ($rol == 'Admin') {
                $isAdmin = true;
            }
        }


        if ($isAdmin) {

            $productos = Producto::with('user')->get();
            //ph return $productos[0]->user->name;
            return view('admin.producto.index', compact('productos'));

        }
        else {

            $productos = Producto::where('user_id',auth()->user()->id)->with('user')->get();
            //ph return $productos[0]->user->name;
            return view('admin.producto.index', compact('productos'));
            
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.producto.create', compact('categorias'));
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
             
            'nombre'=>'required',
            'descripcion'=>'required',
            'medidas'=>'required',
            'colores'=>'required',
            'precio'=>'required',
            'stock'=>'required'

        ]);
        $request->offsetSet('user_id', auth()->user()->id);
        $productos = Producto::create($request->all()) ;

        return redirect()->route('admin.producto.index', $productos)->with('info', 'el producto se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $productos)
    {
        return view('admin.producto.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('admin.producto.edit', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
             
            'nombre'=>'required',
            'descripcion'=>'required',
            'medidas'=>'required',
            'colores'=>'required',
            'precio'=>'required',
            'stock'=>'required'

        ]);
        $producto->update($request->all());
        return redirect()->route('admin.producto.edit', $producto)->with('info', 'el producto se actualizo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('admin.producto.index')->with('info', 'el producto se elimino con exito');
    }
}
