@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear un nuevo producto</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.producto.store']) !!} 

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el nombre del producto']) !!}
                </div>

                @error('nombre')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripción') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder'=>'Ingrese la descripción del producto']) !!}
                </div>

                @error('descripcion')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('medidas', 'Medidas') !!}
                    {!! Form::text('medidas', null, ['class' => 'form-control', 'placeholder'=>'Ingrese las medidas del producto']) !!}
                </div>

                @error('medidas')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('colores', 'Colores') !!}
                    {!! Form::text('colores', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el o los colores del producto']) !!}
                </div>

                @error('colores')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('precio', 'Precio') !!}
                    {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el precio del producto']) !!}
                </div>

                @error('precio')
                <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('stock', 'Stock') !!}
                    {!! Form::text('stock', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el stock del producto']) !!}
                </div>

                @error('stock')
                <span class="text-danger">{{$message}}</span>
                @enderror

                {!! Form::submit('Crear Producto', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop






@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop