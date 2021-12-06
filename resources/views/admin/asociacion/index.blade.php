@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

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
        <div class="table-responsive">
            <table class="table table-striped" id="tabla-asociaciones">
                <thead>
                    <tr class="bg-gray">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($asociaciones as $asociacion)
                        <tr>
                            <td class="align-middle">{{$asociacion->id}}</td>
                            <td class="align-middle">{{$asociacion->nombre}}</td>
                            <td class="align-middle">{{$asociacion->descripcion}}</td>
                            <td width="10px" class="align-middle">
                
                                    <a class="btn btn-primary btn-sm m-2" href="{{route('admin.asociacion.edit', $asociacion)}}"><i class="fas fa-edit"></i></a>
                                
                                    <form action="{{route('admin.asociacion.destroy', $asociacion)}}" method="POST">
                                        @csrf
                                        @method('delete')
    
                                        <button type="submit" class="btn btn-danger btn-sm m-2"><i class="fas fa-trash"></i></button>
                                    </form>  
                               
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
            $("#tabla-asociaciones").DataTable({
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