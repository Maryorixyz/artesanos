@extends('layouts.plantilla')

@section('titulo', $artesano->name)

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/artesano-perfil.css") }}">

@endsection

@section('classes-header', 'header-v4')

@section('contenido')
    
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 banner">
        <h2 class="ltext-105 cl0 txt-center">
            {{ $artesano->name }}
            <br>
            <span style="font-size: 2.5rem">
                "{{ $artesano->empresa }}"
            </span>
        </h2>
        
    </section>	

    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-100">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                           Mi Información
                        </h3>
                        <p class="stext-113 cl6 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
                        </p>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{ asset($artesano->profile_photo_url) }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row p-b-10">
                <div class="col">
                    <div class="p-t-7 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Mi Ubicación
                        </h3>

                        <div id="mapa-perfil-artesano" class="mapa-perfil-artesano" data-map-x="{{ $artesano->latitud }}" data-map-y="{{ $artesano->longitud }}">

                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Mis Productos
                        </h3>
                        <div id="filas-producto" class="row isotope-grid m-t-10">
                            @foreach ($artesano->productos as $producto)
            
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item @foreach($producto->categorias as $categoria){{ $categoria->slug }} @endforeach">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="{{ asset($producto->imagenes[0]->url) }}" alt="IMG-PRODUCT">
                                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-producto="{{ $producto }}">
                                                Vista Rápida
                                            </a>
                                        </div>
                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l">
                                                <div class="producto-center"">
                                                    <a title="{{ strtoupper($producto->nombre) }}" href="{{ route('productos.detalle', $producto->id) }}" class="stext-104 hov-cl1 trans-04 js-name-b2 p-b-6 producto-nombre edit">
                                                        {{ $producto->nombre }}
                                                    </a>
                                                </div>
                
                                                <span class="precio-producto stext-105 cl5" data-precio="{{ $producto->precio }}">
                                                    <img class="iconos" src="{{ asset('images/icons/precio-1.png') }}"> S/. {{ $producto->precio }}
                                                </span>
                                            </div>
                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2" data-producto="{{ $producto->id }}">
                                                    <img class="icon-heart1 dis-block trans-04" src="{{ asset('images/icons/icon-heart-01.png') }}" alt="ICON" data-producto="{{ $producto->id }}">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('images/icons/icon-heart-02.png') }}" alt="ICON" data-producto="{{ $producto->id }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
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

							<div  id = "modal-producto-nombre">
								<h1 class="mtext-105 cl2 js-name-detail p-b-14 edit-nombre-modal">nombre</h1>
							</div>
							<div class="modal-cabecera">
								<div id ="modal-producto-precio" class="modal-producto-precio">
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

	<script src="{{ mix('js/artesano-perfil.js') }}"></script>
	
@endsection