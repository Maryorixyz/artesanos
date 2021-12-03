@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
    </div>
@endif
    
<div class="card">
    <div class="card-body">
        {!! Form::model($producto, ['route' => ['admin.producto.update', $producto], 'method' => 'put']) !!} 

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el nombre del producto']) !!}
                    </div>

                    @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('precio', 'Precio') !!}
                        {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el precio del producto']) !!}
                    </div>

                    @error('precio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('medidas', 'Medidas') !!}
                        {!! Form::text('medidas', null, ['class' => 'form-control', 'placeholder'=>'Ingrese las medidas del producto']) !!}
                    </div>

                    @error('medidas')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('colores', 'Colores') !!}
                        {!! Form::text('colores', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el o los colores del producto']) !!}
                    </div>

                    @error('colores')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows'=>'4', 'placeholder'=>'Ingrese la descripción del producto']) !!}
            </div>

            @error('descripcion')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label class="label">Categoria</label>
                        @foreach ($categorias as $categoria)
                            <div>
                                <label>
                                    {!! Form::checkbox('categorias[]', $categoria->id, null, ['class' => 'mr-1']) !!}
                                    {{$categoria->descripcion}}
                                </label>
                            </div>  
                        @endforeach
                    </div>   
                </div>
                <div class="col-8">
                    <div class="image-wrapper">
                        <img id="picture"  alt="" style="max-height: 250px">
                    </div>
                    <div class="form-group">
                        {!! Form::label('file', 'imagen del producto') !!}
                        {!! Form::file('file', ['class' => 'form-control-file']) !!}
                    </div>
                    @error('file')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
       
        

            {!! Form::submit('Actualizar Producto', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
        
    </script>
@stop