@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

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
            <div class="table-responsive">
                <table class="table table-striped" id="tabla-productos">
                    <thead>
                        <tr>
                            <th class="align-middle text-center">Imagen</th>
                            <th class="align-middle text-center">Nombre</th>
                            <th class="align-middle text-center">Medidas</th>
                            <th class="align-middle text-center" width="10%">Precio</th>
                            <th class="align-middle text-center" width="15%">Categorias</th>
                            <th class="align-middle text-center">Artesano</th>
                            <th class="align-middle text-center">Acciones</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td class="align-middle">
                                    <img src="{{asset($producto->imagenes[0]->url)}}" alt="IMG-PRODUCT" height="150" width="100" style="object-fit:cover">
                                </td>
                                <td class="align-middle">{{$producto->nombre}}</td>
                                <td class="align-middle">{{$producto->medidas}}</td>
                                <td class="align-middle">S/ {{round($producto->precio, 2)}}</td>
                                <td class="align-middle">
                                    @foreach($producto->categorias as $categoria)
                                       <span class="badge bg-green text-uppercase">{{ $categoria->slug }}</span>  
                                    @endforeach
                                </td>
                                
                                
                                <td class="align-middle">{{$producto->user->name}}</td>
                                
                                <td width="10px" class="align-middle">
                                    <div class="d-flex">
                                        <a class="btn btn-primary btn-sm m-2" href="{{route('admin.producto.edit', $producto)}}"><i class="fas fa-edit"></i></a>
                                        <form action="{{route('admin.producto.destroy', $producto)}}" method="POST" >
                                            @csrf
                                            @method('delete')
    
                                            <button type="submit" class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i></button>
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
            $("#tabla-productos").DataTable({
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