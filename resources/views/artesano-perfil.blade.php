@extends('layouts.plantilla')

@section('titulo', 'Asociaciones')

@section('css')

	<link rel="stylesheet" type="text/css" href="{{ mix("css/artesano-perfil.css") }}">

@endsection

@section('classes-header', 'header-v4')

@section('contenido')
    
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 banner">
        <h2 class="ltext-105 cl0 txt-center">
            {{ $artesano->name }}
        </h2>
    </section>	

    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Información
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. 
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
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
            
            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Municipalidad de Amarilis
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            Mauris non lacinia magna. Sed nec lobortis dolor. Vestibulum rhoncus dignissim risus, sed consectetur erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam maximus mauris sit amet odio convallis, in pharetra magna gravida. Praesent sed nunc fermentum mi molestie tempor. Morbi vitae viverra odio. Pellentesque ac velit egestas, luctus arcu non, laoreet mauris. Sed in ipsum tempor, consequat odio in, porttitor ante. Ut mauris ligula, volutpat in sodales in, porta non odio. Pellentesque tempor urna vitae mi vestibulum, nec venenatis nulla lobortis. Proin at gravida ante. Mauris auctor purus at lacus maximus euismod. Pellentesque vulputate massa ut nisl hendrerit, eget elementum libero iaculis.
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                            </p>

                            <span class="stext-111 cl8">
                                - Steve Job’s 
                            </span>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{ asset('images/nosotros2.jpg') }}" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div id="filas-producto" class="row isotope-grid m-t-60">
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
                                        <a title="{{ strtoupper($producto->nombre) }}" href="product-detail.html" class="stext-104 hov-cl1 trans-04 js-name-b2 p-b-6 producto-nombre edit">
                                            {{ $producto->nombre }}
                                        </a>
                                    </div>
    
                                    <span class="precio-producto stext-105 cl5" data-precio="{{ $producto->precio }}">
                                        <img class="iconos" src="{{ asset('images/icons/precio-1.png') }}"> S/. {{ $producto->precio }}
                                    </span>
                                </div>
                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="{{ asset('images/icons/icon-heart-01.png') }}" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('images/icons/icon-heart-02.png') }}" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </section>	
    {{ $artesano }}

@endsection

@section('js')

	<script src="{{ mix('js/artesano-perfil.js') }}"></script>
	
@endsection