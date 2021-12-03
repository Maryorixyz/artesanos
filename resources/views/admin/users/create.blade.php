@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear un Artesano</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.users.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                </div>

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un email']) !!}
                </div>

                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una contraseña']) !!}
                </div>

                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una Telefono']) !!}
                </div>

                @error('contacto')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('direccion', 'Dirección') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una Telefono']) !!}
                </div>

                @error('direccion')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                <div class="form-group">
                    <label class="label">Sexo</label>
                    <div class="form-check">
                            {!! Form::radio('sexo', 'F', null, ['class' => "form-check-input"]) !!}
                            <label> F</label>
                    </div>
                    <div class="form-check">
                            {!! Form::radio('sexo', 'M', null, ['class' => "form-check-input"]) !!}
                            <label> M</label>
                    </div>
                </div> 
                    {!! Form::submit('Crear Artesano', ['class' => 'btn btn-primary ']) !!}
                    
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