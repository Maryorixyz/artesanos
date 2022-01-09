<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.create')->only('create', 'store');
        $this->middleware('can:admin.users.edit')->only('edit','update');
        $this->middleware('can:admin.users.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'latitud' => 'required',
            'longitud' => 'required'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,

            'longitud' => $request->longitud,
            'latitud' => $request->latitud,
        ])->syncRoles(['Artesano']);

        return redirect()->route('admin.users.index', $user)->with('info', 'Se creo un artesano correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {   
        $roles = Role::all();
        $user->password = "";
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function editRoles(User $user)
    {   
        $roles = Role::all(); 

        return view('admin.users.edit-roles', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        // Para actualizar el usuario
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
            'latitud' => 'required',
            'longitud' => 'required'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,

            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,

            'longitud' => $request->longitud,
            'latitud' => $request->latitud,
        ]);

        if (isset($request->password)) {

            $user->update([
                'password' => Hash::make($request->password),
            ]);

        }

        return redirect()->route('admin.users.edit', $user)->with('info', 'Se actualizo el usuario correctamente');
    }

    //actualizar roles
    public function updateRoles(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.editRoles', $user)->with('info', 'Se asigno los roles correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
