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
                    {{-- <img src="images/icons/logo-01.png" alt="IMG-LOGO"> --}}
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{route('asociaciones')}}">Asociaciones</a>
                        </li>

                        <li class="active-menu">
                            <a href="{{ route('catalogo') }}">Catalogo</a>
                        </li>

                        <li>
                            <a href="{{ route('nosotros') }}">Nosotros</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('contactanos') }}">Contactos</a>
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