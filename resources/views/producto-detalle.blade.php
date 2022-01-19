@extends('layouts.plantilla')

@section('titulo', $producto->nombre)

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/producto-detalle.css") }}">

@endsection

@section('classes-header', 'header-v4')

@section('contenido')

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ route('inicio') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Inicio
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <a href="{{ route('catalogo') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Catálogo
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                {{ $producto->nombre }}
            </span>
        </div>
    </div>
        

    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick4 flex-sb flex-w">
                            <div class="wrap-slick4-dots"></div>
                            <div class="wrap-slick4-arrows flex-sb-m flex-w"></div>

                            <div class="slick4 gallery-lb4">

                                @foreach ($producto->imagenes as $imagen)
                                    <div class="item-slick4" data-thumb="{{ asset($imagen->url) }}">
                                        <div class="wrap-pic-w pos-relative detalle-imagen-modal">
                                            <img src="{{ asset($imagen->url) }}" alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset($imagen->url) }}">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{ $producto->nombre }}
                        </h4>

                        <span class="mtext-106 cl2">
                            S/. {{ $producto->precio }}
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                            {{ $producto->descripcion }}
                        </p>
                        
                        <!--  -->
                        <div class="bor10 m-t-50 p-t-43 p-b-40">
                            <!-- Tab01 -->
                            <div class="tab01">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item p-b-10">
                                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Descripción</a>
                                    </li>
            
                                    <li class="nav-item p-b-10">
                                        <a class="nav-link" data-toggle="tab" href="#information" role="tab">Información adicional</a>
                                    </li>
                                </ul>
            
                                <!-- Tab panes -->
                                <div class="tab-content p-t-43">
                                    <!-- - -->
                                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                                        <div class="how-pos2 p-lr-15-md">
                                            <p class="stext-102 cl6">
                                                {{ $producto->descripcion }}
                                            </p>
                                        </div>
                                    </div>
            
                                    <!-- - -->
                                    <div class="tab-pane fade" id="information" role="tabpanel">
                                        <div class="row">
                                            <div class="m-lr-auto">
                                                <ul class="p-lr-28 p-lr-15-sm">
                                                    <li class="flex-w flex-t p-b-7">
                                                        <span class="stext-102 cl3 size-205">
                                                            Peso
                                                        </span>
            
                                                        <span class="stext-102 cl6 size-206">
                                                            {{ $producto->peso ? $producto->peso : 'Sin peso' }}
                                                        </span>
                                                    </li>
            
                                                    <li class="flex-w flex-t p-b-7">
                                                        <span class="stext-102 cl3 size-205">
                                                            Dimensiones
                                                        </span>
            
                                                        <span class="stext-102 cl6 size-206">
                                                            {{ $producto->dimensiones ? $producto->dimensiones : 'Sin dimensiones' }}
                                                        </span>
                                                    </li>
            
                                                    <li class="flex-w flex-t p-b-7">
                                                        <span class="stext-102 cl3 size-205">
                                                            Materiales
                                                        </span>
            
                                                        <span class="stext-102 cl6 size-206">
                                                            {{ $producto->materiales ? $producto->materiales : 'No especificado' }}
                                                        </span>
                                                    </li>
            
                                                    <li class="flex-w flex-t p-b-7">
                                                        <span class="stext-102 cl3 size-205">
                                                            Color
                                                        </span>
            
                                                        <span class="stext-102 cl6 size-206">
                                                            {{ $producto->colores ? $producto->colores : 'No especificado' }}
                                                        </span>
                                                    </li>
            
                                                    <li class="flex-w flex-t p-b-7">
                                                        <span class="stext-102 cl3 size-205">
                                                            Tallas
                                                        </span>
            
                                                        <span class="stext-102 cl6 size-206">
                                                            {{ $producto->medidas ? $producto->medidas : 'No especificado' }}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                        
                        <div class="m-t-50 d-flex justify-content-center">
                            <a 
                                href="https://api.whatsapp.com/send?phone=+51{{ $producto->user->telefono }}&text=Hola {{ $producto->user->name }} encontré tu producto en el catálogo de artesania RUTA ARTESANAL, me interesa el producto {{ $producto->nombre }}.%20%0A%20%0A{{ Request::url() }}"
                                class="btn btn-success"
                                target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                Contactar con el artesano
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
            <span class="stext-107 cl6 p-lr-25">
                Categorias: 
                @foreach ($producto->categorias as $categoria)
                    {{ $categoria->descripcion }} 
                    @if ($loop->last)
                        .
                    @else
                        -
                    @endif 
                @endforeach
            </span>
        </div>
    </section>


    <!-- Related Products -->
    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center">
                    Productos Relacionados
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2" id="filas-producto">
                    @foreach ($productosRelacionados as $productoRelacionado)
                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="{{ asset($productoRelacionado->imagenes[0]->url) }}" alt="IMG-PRODUCT">

                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-producto="{{ $productoRelacionado }}">
                                        Vista Rápida
                                    </a>
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <div class="producto-center">
                                            <a title="{{ strtoupper($productoRelacionado->nombre) }}" href="{{ route('productos.detalle', $productoRelacionado->id) }}" class="stext-104 hov-cl1 trans-04 js-name-b2 p-b-6 producto-nombre edit">
                                                {{ $productoRelacionado->nombre }}
                                            </a>
                                        </div>

                                        <a href="{{ route('artesanos.perfil', $productoRelacionado->user->id) }}" class="stext-104 cl3 hov-cl1 trans-04 p-b-6 producto-nombre" style="display: flex">
                                            <img class="iconos" src="{{ $productoRelacionado->user->sexo == 'M' ? asset('images/icons/artesano-hombre.png') : asset('images/icons/artesano-mujer.png') }}"> {{ $productoRelacionado->user->name }}
                                        </a>
        
                                        <span class="precio-producto stext-105 cl5" data-precio="{{ $productoRelacionado->precio }}" style="display: flex">
                                            <img class="iconos" src="{{asset('images/icons/precio-1.png')}}"> S/. {{ $productoRelacionado->precio }}
                                        </span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2" data-producto="{{ $productoRelacionado->id }}">
                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('images/icons/icon-heart-01.png') }}" alt="ICON" data-producto="{{ $productoRelacionado->id }}">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('images/icons/icon-heart-02.png') }}" alt="ICON" data-producto="{{ $productoRelacionado->id }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{ asset('images/icons/icon-close.png') }}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div id="modal-producto-limpiar" class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div id="modal-producto-imagenes" class="slick3 gallery-lb">
			
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">

						<div class="p-r-50 p-t-5 p-lr-0-lg">

							<div  id="modal-producto-nombre">
								<h1 class="mtext-105 cl2 js-name-detail p-b-14 edit-nombre-modal">nombre</h1>
							</div>
							<div class="modal-cabecera">
								<div id="modal-producto-precio" class="modal-producto-precio">
									<span class="mtext-106 cl2">Precio</span>
								</div>

								<h4>Descripción</h4>
								<div id="modal-producto-descripcion" class="modal-producto-descripcion">
									<p class="stext-102 cl3 p-t-23">descripcion del producto</p>
								</div>
							</div>
							<div class="modal-informacion-artesano">
								<h4>Informacion del artesano</h4>
								<div class="informacion-usuario">
										<div id="modal-producto-usuario-foto" class="foto-artesano" ></div>
										<div>
											<div id="modal-producto-user-name" class="nombre-artesano">NOMBRE</div>
											<div id="modal-producto-user-empresa" class="artesano-empresa">EMPRESA</div>
											<div id="modal-producto-user-asociacion" class="artesano-asociacion">ASOCIACION</div>
											<div id="modal-producto-user-direccion" class="artesano-direccion">DIRECCION</div>
											<div id="modal-producto-user-telefono" class="artesano-telefono">TELEFONO</div>
										</div>
								</div>
							</div>
							<div class="modal-detalle-mapa">
								<h4>Ubicación</h4>
								<div id="modal-producto-usuario-map" class="modal-mapa">MAPA</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection	

@section('js')

	<script src="{{ mix('js/producto-detalle.js') }}"></script>
	
@endsection