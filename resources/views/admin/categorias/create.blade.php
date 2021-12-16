@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear una Categoria</h1>
@stop

@section('content')
    
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.categorias.store']) !!}
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('descripcion', 'Nombre') !!}
                                {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                            
                                @error('descripcion')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                {!! Form::label('slug', 'Slug') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}
                            
                                @error('slug')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
        
                            </div>
                        </div>
                    </div>

                    {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>    
        </div> 

@stop

@section('js')

        <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    

        <script>
            
            $(document).ready( function() {
                $("#descripcion").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
                });
            });

        </script>

@endsection





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

