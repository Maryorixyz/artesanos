@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de productos</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.producto.create')}}">Agregar Producto</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Medidas</th>
                        <th>Colores</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>User_id</th>
                        <th colspan="2"></th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->medidas}}</td>
                            <td>{{$producto->colores}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->stock}}</td>
                            <td>{{$producto->user_id}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.producto.edit', $producto)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.producto.destroy', $producto)}}" method="POST" >
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