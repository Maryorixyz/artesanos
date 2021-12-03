@extends('layouts.plantilla')

@section('titulo', 'Ruta Artesanal')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ mix("css/index.css") }}">
@endsection

@section('contenido')

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/2.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Ruta Artesanal
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Amarilis
								</h2>
							</div>
								
						<!-- Cart -->	
						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="{{ route('nosotros') }}" class="flex-c-m stext-101 cl0 size-101 cambio-home bor1 hov-btn1 p-lr-15 trans-04">
									Descubrelo
								</a>
							</div>
						</div>
					</div>
				</div>

			<!-- Cart -->	
			<div class="item-slick1" style="background-image: url(images/2.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Ruta Artesanal
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Asociaciones
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{{ route('asociaciones.index') }}" class="flex-c-m stext-101 cl0 size-101 cambio-home bor1 hov-btn1 p-lr-15 trans-04">
									Descubrelo
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/2.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Ruta Artesanal
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Catalogo
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="{{ route('catalogo') }}" class="flex-c-m stext-101 cl0 size-101 cambio-home bor1 hov-btn1 p-lr-15 trans-04">
									Descubrelo
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Asociaciones
				</h3>
			</div>
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/asociacion.jpg" alt="IMG-ASOCIACION">

						<a href="{{route('asociaciones.index')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Asociacion
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Catálogo
				</h3>
			</div>
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos los Productos
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Mascaras
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Trajes
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Manualidades
					</button>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filtrar
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Buscar
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Buscar Producto">
					</div>	
				</div>
				
				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Ordenar por:
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Defecto
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Novedad
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Populares
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Precio: Menor a Mayor
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Precio: Mayor a Menor
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Precio
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Todo
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										S/.0.00 - S/.20.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										S/.20.00 - S/.50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										S/.50.00 - S/.100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										S/.100.00 - S/.200.00
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="filas-producto" class="row isotope-grid">
				@foreach ($productos as $producto)
					
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item @foreach($producto->categorias as $categoria){{ $categoria->slug }} @endforeach">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="{{ $producto->imagenes[0]->url }}" alt="IMG-PRODUCT">
								<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-producto="{{ $producto }}">
									Vista Rápida
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l">
									<div class="producto-center"">
										<a title="{{ strtoupper($producto->nombre) }}" href="product-detail.html" class="stext-104 hov-cl1 trans-04 js-name-b2 p-b-6 producto-nombre edit">
											{{ $producto->nombre }}
										</a>
									</div>

									<a href="product-detail.html" class="stext-104 cl3 hov-cl1 trans-04 js-name-b2 p-b-6 producto-nombre">
										<img class="iconos" src="{{ $producto->user->sexo == 'M' ? asset('images/icons/artesano-hombre.png') : asset('images/icons/artesano-mujer.png') }}"> {{ $producto->user->name }}
									</a>
	
									<span class="precio-producto stext-105 cl5" data-precio="{{ $producto->precio }}">
										<img class="iconos" src="{{asset('images/icons/precio-1.png')}}"> <i>S/. {{ $producto->precio }} </i>
									</span>
								</div>
								<div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
									</a>
								</div>
							</div>
						</div>
					</div>

					
				@endforeach
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="{{route('catalogo')}}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Mostrar más
				</a>
			</div>
		</div>
	</section>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
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
	
	<script src="{{ mix('js/index.js') }}"></script>

@endsection
