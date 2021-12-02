@extends('layouts.plantilla')

@section('titulo', 'Catalago')

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/catalogo.css") }}">

@endsection

@section('classes-header', 'header-v4')

@section('contenido')

	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos los Productos
					</button>

					@foreach ($categorias as $categoria)
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{ $categoria->slug }}">
							{{ $categoria->descripcion }}
						</button>
					@endforeach
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

						<input id="buscar-productos" class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Buscar...">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="order-link filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Ordenar Por
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-sort-by="original-order">
										Por defecto
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-sort-by="precioAsc">
										Precio: Menor a Mayor
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-sort-by="precioDesc">
										Precio: Mayor a Menor
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-link-precio filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Precio
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active" data-filter="*">
										Todo
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="preciosEntre0a30">
										<i>S/. </i>00.00 - <i>S/. </i>30.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="preciosEntre30a60">
										<i>S/. </i>30.00 - <i>S/. </i>60.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="preciosEntre60a90">
										<i>S/. </i>60.00 - <i>S/. </i>90.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="preciosEntre90a120">
										<i>S/. </i>90.00 - <i>S/. </i>120.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04" data-filter="preciosEntre120aMas">
										<i>S/. </i>120.00 + 
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Mascaras
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Artesania
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Indumentaria
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Artesania
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Cotones
								</a>
							</div>
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
										<img class="iconos" src="{{asset('images/icons/precio-1.png')}}"> S/. {{ $producto->precio }}
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
				<a id="ver-mas" href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" data-cantidad={{$cantidad_de_productos}}>
					Mostrar más
				</a>
			</div>
		</div>
	</div>
		
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

								<h4>Descripción:</h4>
								<div id="modal-producto-descripcion" class="modal-producto-descripcion">
									<p class="stext-102 cl3 p-t-23">descripcion 2</p>
								</div>
							</div>
							<div class="modal-informacion-artesano">
								<h4>Informacion del artesano</h4>
								<div class="informacion-usuario">
										<div id="modal-producto-usuario-foto" class="foto-artesano" ></div>
										<div id="modal-producto-user-name" class="nombre-artesano">NOMBRE</div>
								</div>
							</div>
							<div class="modal-detalle-mapa">
								<h4>Ubicacion:</h4>
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

	<script src="{{ mix('js/catalogo.js') }}"></script>
	
@endsection

	

