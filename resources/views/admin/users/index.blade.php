@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Listado de Usuarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.users.create')}}">Crear Usuario</a>
        </div>

        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-usuarios">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th >Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="align-middle">{{$user->name}}</td>
                                <td class="align-middle">{{$user->email}}</td>
                                <td class="align-middle">{{$user->telefono}}</td>
                                <td class="align-middle">{{$user->direccion}}</td>
                                <td width="10px" class="text-center">
    
                                    <a class="btn btn-warning btn-sm mb-1 btn-block" href="{{route('admin.users.editRoles', $user)}}">Roles</a>          
                                    <div class="d-flex justify-content-between"> 

                                        <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fas fa-edit"></i></a>

                                        <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                            @csrf
                                            @method('delete')
    
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>   
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 

        $(function () {
            $("#tabla-usuarios").DataTable({
                paging: true,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
                }
            });
        });

    </script>
@stop