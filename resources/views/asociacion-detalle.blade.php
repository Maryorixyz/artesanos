@extends('layouts.plantilla')

@section('titulo', 'Asociaciones')

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/asociacion-detalle.css") }}">

@endsection

@section('classes-header', 'header-v4')

@section('contenido')
    
    <!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="{{ asset($asociacion->imagenes[0]->url) }}" alt="IMG-BLOG">

							<div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
									{{ count($asociacion->users) }}
								</span>

								<span class="stext-109 cl3 txt-center">
									Artesanos
								</span>
							</div>
						</div>

						<div class="p-t-32">
							
							<h4 class="ltext-109 cl2 p-b-28">
								{{ $asociacion->nombre }}
							</h4>

							<p class="stext-117 cl6 p-b-26">
								{{ $asociacion->descripcion }}
							</p>
						</div>

						<div class="p-t-40">
							<h5 class="mtext-113 cl2 p-b-12">
								Nuestros artesanos
							</h5>

							<div id="filas-producto" class="row isotope-grid">
								@foreach ($asociacion->users as $user)
									
									<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
										<!-- Block2 -->
										<div class="block2" style="width: 100%">
											<div class="block2-pic hov-img0" style="width: 100%; height: 250px;">
												<img src="{{ $user->profile_photo_url }}" alt="IMG-ARTESANO" style="height: 250px; width: 100%; object-fit: cover;">
												<a href="{{ route('artesanos.perfil', $user->id) }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
													Ver productos
												</a>
											</div>
											<div class="block2-txt flex-w flex-t p-t-14">
												<div class="block2-txt-child1 flex-col-l" style="width: 100%">
													<div class="producto-center">
														<a title="{{ strtoupper($user->name) }}" href="{{ route('artesanos.perfil', $user->id) }}" class="stext-104 hov-cl1 trans-04 js-name-b2 p-b-6 producto-nombre edit">
															{{ $user->name }}
														</a>
													</div>
				
					
												</div>
											</div>
										</div>
									</div>
				
									
								@endforeach
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 pos-relative">
							<input id="buscador_artesanos" class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="Search" placeholder="Buscar Artesano" autocomplete="off">

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

								@foreach ($categorias as $categoria)

									<li class="bor18">
										<a href="{{route('catalogo')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
											{{ $categoria->descripcion }}
										</a>
									</li>

								@endforeach

							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Ultimos Productos
							</h4>

							<ul>

								@foreach ($productos as $producto)
									
									<li class="flex-w flex-t p-b-30">
										<a href="{{ route('productos.detalle', $producto->id) }}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
											<img height="150" src="{{ asset($producto->imagenes[0]->url) }}" alt="PRODUCT" style="object-fit: cover; width: 100%;">
										</a>

										<div class="size-215 flex-col-t p-t-8">
											<a href="{{ route('productos.detalle', $producto->id) }}" class="stext-116 cl8 hov-cl1 trans-04">
												{{ $producto->nombre }}
											</a>

											<span class="stext-116 cl6 p-t-20">
												S/. {{ $producto->precio }}
											</span>
										</div>
									</li>

								@endforeach
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

@endsection

@section('js')

	<script src="{{ mix('js/asociacion-detalle.js') }}"></script>
	
@endsection