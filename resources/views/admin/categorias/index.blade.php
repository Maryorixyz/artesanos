@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Datatables', true)

@section('content_header')

    @can('admin.categorias.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categorias.create')}}">Agregar Categoria</a>
    @endcan

    <h1>Lista de Categorias</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
        <div class="card">
            <div class="table-responsive">
                <div class="card-body">
                    <table class="table table-striped" id="tabla-categorias">
                        <thead>
                            <tr class="bg-gray">
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td class="align-middle">{{$categoria->descripcion}}</td>
                                    <td width="10px" class="align-middle">
                                        @can('admin.categorias.edit')
                                            <a class="btn btn-primary btn-sm m-1" href="{{route('admin.categorias.edit', $categoria)}}"><i class="fas fa-edit"></i></a>
                                        @endcan
                                        @can('admin.categorias.destroy', )
                                            <form action="{{route('admin.categorias.destroy', $categoria)}}" method="POST">
                                                @csrf
                                                @method('delete')
    
                                                <button type="submit" class="btn btn-danger btn-sm m-1"><i class="fas fa-trash"></i></button>
                                            </form>  
                                        @endcan
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
            $("#tabla-categorias").DataTable({
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