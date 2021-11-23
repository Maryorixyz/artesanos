<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contactos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset("images/logo_amarilis.png") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ mix('css/vendor.css') }}">	

    <link rel="stylesheet" type="text/css" href="{{ mix("css/contactanos.css") }}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="{{ route('inicio') }}" class="logo">
                        <svg id="R_copia" data-name="R copia" xmlns="http://www.w3.org/2000/svg" width="100" height="60" viewBox="0 0 200 200" style="max-height: 60px;">
                            <path id="Forma_3" data-name="Forma 3" class="cls-1" d="M23.99,108.99l35.843,47.019h21.18L43.54,108.99"/>
                            <path id="Forma_1_copia" data-name="Forma 1 copia" class="cls-1" d="M20.143,157L4,147.5V92.071a8.09,8.09,0,0,1,8.071-4.751,7.979,7.979,0,0,1,6.457,4.751v4.751H50.814a23.41,23.41,0,0,0,0-38.007H18.529v9.5a9.862,9.862,0,0,1-6.457,3.167A9.977,9.977,0,0,1,4,68.3V44.562H55.657A37.533,37.533,0,0,1,75.028,74.651c0.9,13.983-6.547,27.56-19.371,34.84H20.143V157Z"/>
                            <path id="Forma_6" data-name="Forma 6" class="cls-1" d="M114.027,126.505a6.091,6.091,0,0,0-2.886,5.622,5.968,5.968,0,0,0,2.886,4.819h21.642a6.7,6.7,0,0,0-.721-10.441H114.027Z"/>
                            <path id="Forma_4" data-name="Forma 4" class="cls-1" d="M60,156L112.024,43.008q24.2,50.488,48.4,100.975l16.615-.814L140.92,72.323l-2.889,5.7a6.63,6.63,0,0,1-7.225-.814,8.788,8.788,0,0,1-2.889-8.143l13-26.058L198,156H152q-19.987-41.838-39.976-83.677L79.516,143.169H90.352q10.475-20.358,20.95-40.716a6.557,6.557,0,0,1,7.224,0,8.461,8.461,0,0,1,3.612,7.329L98,156H60Z"/>
                        </svg>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">

							<li>
                                <a href="{{route('asociaciones')}}">Asociaciones</a>
                            </li>
            
                            <li>
                                <a href="{{ route('catalogo') }}">Catalogo</a>
                            </li>
            
                            <li>
                                <a href="{{ route('nosotros')}}">Nosotros</a>
                            </li>
                            
                            <li class="active-menu">
                                <a href="{{route('contactanos')}}">Contactos</a>
                            </li>
							
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-nuevo trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
                        
                        @if (Route::has('login'))
							<ul class="main-menu">
								@auth
									<li>
										<a class="sesion">{{ explode(' ', Auth::user()->name)[0] }}</a>
										<ul class="sub-menu">
											<li><a href="#">Perfil</a></li>
											<li><a href="{{ route('admin.inicio') }}">Dashboard</a></li>
											<li>
												<a href="{{ route('logout') }}" onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">Cerrar Sesión</a>
												<form method="POST" id="logout-form" action="{{ route('logout') }}">
													@csrf
												</form>
											</li>
										</ul>
									</li>
								@else
									<li>
										<a href="{{ route('login') }}" class="sesion">Inicia Sesión</a>
									</li>
								@endauth
							</ul>
                        @endif
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="#">
					<svg id="R_copia" data-name="R copia" xmlns="http://www.w3.org/2000/svg" width="100" height="400" viewBox="0 0 200 200" style="max-height: 60px;">
						<path id="Forma_3" data-name="Forma 3" class="cls-2" d="M23.99,108.99l35.843,47.019h21.18L43.54,108.99"/>
						<path id="Forma_1_copia" data-name="Forma 1 copia" class="cls-2" d="M20.143,157L4,147.5V92.071a8.09,8.09,0,0,1,8.071-4.751,7.979,7.979,0,0,1,6.457,4.751v4.751H50.814a23.41,23.41,0,0,0,0-38.007H18.529v9.5a9.862,9.862,0,0,1-6.457,3.167A9.977,9.977,0,0,1,4,68.3V44.562H55.657A37.533,37.533,0,0,1,75.028,74.651c0.9,13.983-6.547,27.56-19.371,34.84H20.143V157Z"/>
						<path id="Forma_6" data-name="Forma 6" class="cls-2" d="M114.027,126.505a6.091,6.091,0,0,0-2.886,5.622,5.968,5.968,0,0,0,2.886,4.819h21.642a6.7,6.7,0,0,0-.721-10.441H114.027Z"/>
						<path id="Forma_4" data-name="Forma 4" class="cls-2" d="M60,156L112.024,43.008q24.2,50.488,48.4,100.975l16.615-.814L140.92,72.323l-2.889,5.7a6.63,6.63,0,0,1-7.225-.814,8.788,8.788,0,0,1-2.889-8.143l13-26.058L198,156H152q-19.987-41.838-39.976-83.677L79.516,143.169H90.352q10.475-20.358,20.95-40.716a6.557,6.557,0,0,1,7.224,0,8.461,8.461,0,0,1,3.612,7.329L98,156H60Z"/>
					</svg>
				</a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				@if (Route::has('login'))
                    @auth
                        <a class="dis-block cl2 hov-nuevo trans-04 p-r-11 p-l-10">{{ explode(' ', Auth::user()->name)[0] }}</a>
                    @else
                        <a href="{{ route('login') }}" class="dis-block cl2 hov-nuevo trans-04 p-r-11 p-l-10">Inicia Sesión</a> <!--CAMBIO hov-cl1-->
                    @endauth
                @endif
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">

			<ul class="main-menu-m">

                @if (Route::has('login'))
                    @auth
						<li>
							<a class="dis-block cl2 hov-nuevo trans-04 p-r-11 p-l-10">{{ explode(' ', Auth::user()->name)[0] }}</a>
							<ul class="sub-menu-m">
								<li><a href="#">Perfil</a></li>
								<li><a href="{{ route('admin.inicio') }}">Dashboard</a></li>
								<li>
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">Cerrar Sesión</a>
									<form method="POST" id="logout-form" action="{{ route('logout') }}">
										@csrf
									</form>
								</li>
							</ul>
							<span class="arrow-main-menu-m">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</span>
						</li>
                    @else
						<li>
							<a href="{{ route('login') }}">Inicia Sesión</a>
						</li>
                    @endauth
                @endif

				<li>
                    <a href="{{route('asociaciones')}}">Asociaciones</a>
                </li>

                <li>
                    <a href="{{ route('catalogo') }}">Catalogo</a>
                </li>

                <li>
                    <a href="{{ route('nosotros')}}">Nosotros</a>
                </li>
                
                <li>
                    <a href="{{route('contactanos')}}">Contactos</a>
                </li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Buscar...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92 banner">
		<h2 class="ltext-105 cl0 txt-center">
			Contactanos
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Envianos un Mensaje
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Tu correo Electronico">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="¿Como podemos ayudarte?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Enviar
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Ubicanos
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Jr.Huallaga 300, Amarilis 10002
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Llamanos
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								999999999
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Contactanos
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								prueba@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<!-- Footer -->
	@extends('footer')
	
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>