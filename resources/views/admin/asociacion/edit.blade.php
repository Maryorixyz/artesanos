@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar una asociacion</h1>
@stop

@section('content')

        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
        @endif


    <div class="card">
        <div class="card-body">
            {!! Form::model($asociacion, ['route' => ['admin.asociacion.update', $asociacion], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la asociación']) !!}
                </div>

                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripción') !!}
                    {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el descripcion de la asociación']) !!}
                </div>

                @error('descripcion ')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                {!! Form::submit('Actualizar Asociación', ['class' => 'btn btn-primary']) !!}

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