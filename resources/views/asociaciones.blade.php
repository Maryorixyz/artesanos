@extends('layouts.plantilla')

@section('titulo', 'Asociaciones')

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/asociaciones.css") }}">

@endsection

@section('classes-header', 'header-v4')

@section('contenido')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 banner">
		<h2 class="ltext-105 cl0 txt-center">
			Asociaciones
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						@foreach ($asociaciones as  $i => $asociacion)

							<div class="p-b-63">
								<a href="{{ route('asociaciones.detalle', $asociacion->id) }}" class="hov-img0 how-pos5-parent">
									<img src="{{ count($asociacion->imagenes) > 0 ? $asociacion->imagenes[0]->url : '#' }}" alt="IMG-BLOG">

									<div class="flex-col-c-m size-123 bg9 how-pos5">
										<span class="ltext-107 cl2 txt-center">
											{{ $i+1 }}
										</span>
									</div>
								</a>

								<div class="p-t-32">
									<h4 class="p-b-15">
										<a href="{{ route('asociaciones.detalle', $asociacion->id) }}" class="ltext-108 cl2 hov-cl1 trans-04">
											{{ $asociacion->nombre }}

										</a>
									</h4>

									<p class="stext-117 cl6">
										Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum eum sunt, dolor debitis deserunt beatae possimus placeat doloribus saepe, facilis, velit minima dignissimos reiciendis? Incidunt, nam ab. Expedita, fugit inventore?
									</p>

									<div class="flex-w flex-sb-m p-t-18">
										<a href="{{ route('asociaciones.detalle', $asociacion->id) }}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
											Continue Reading

											<i class="fa fa-long-arrow-right m-l-9"></i>
										</a>
									</div>
								</div>
							</div>

						@endforeach

					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 pos-relative">
							<input id="buscador_asociaciones" class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Buscar...">
							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						
							<div class="opcion_relativo">
								<div class="opcion_contenedor">
									<div id="mostrar_resultados">
									</div>
								</div>
							</div>

						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Categorias
							</h4>

							<ul>
								<li class="bor18">
									<a href="{{route('catalogo')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Indumentaria
									</a>
								</li>

								<li class="bor18">
									<a href="{{route('catalogo')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Mascaras
									</a>
								</li>

								<li class="bor18">
									<a href="{{route('catalogo')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Mascara de Negrito
									</a>
								</li>

								<li class="bor18">
									<a href="{{route('catalogo')}}"" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Mascara de Corochano
									</a>
								</li>

								<li class="bor18">
									<a href="{{route('catalogo')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Artesania
									</a>
								</li>
							</ul>
						</div>

						{{-- <div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Featured Products
							</h4>

							<ul>
								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="images/product-min-01.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											White Shirt With Pleat Detail Back
										</a>

										<span class="stext-116 cl6 p-t-20">
											$19.00
										</span>
									</div>
								</li>

								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="images/product-min-02.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											Converse All Star Hi Black Canvas
										</a>

										<span class="stext-116 cl6 p-t-20">
											$39.00
										</span>
									</div>
								</li>

								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="images/product-min-03.jpg" alt="PRODUCT">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="stext-116 cl6 p-t-20">
											$17.00
										</span>
									</div>
								</li>
							</ul>
						</div> --}}

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
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
									Botines
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Cotones
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection	

@section('js')

	<script src="{{ mix('js/asociaciones.js') }}"></script>
	
@endsection
