@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Asociaciones</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">

    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.asociacion.create')}}">Agregar Asociación</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($asociaciones as $asociacion)
                    <tr>
                        <td>{{$asociacion->id}}</td>
                        <td>{{$asociacion->nombre}}</td>
                        <td>{{$asociacion->descripcion}}</td>
                        <td width="10px">
            
                                <a class="btn btn-primary btn-sm" href="{{route('admin.asociacion.edit', $asociacion)}}">Editar</a>
                            
                        </td>
                        <td width="10px">
                            
                                <form action="{{route('admin.asociacion.destroy', $asociacion)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>  
                           
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop