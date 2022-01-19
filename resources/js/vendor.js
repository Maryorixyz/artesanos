require('./bootstrap');

require('./vendor/bootstrap.min.js');

require('./vendor/animsition.min.js');

require('./vendor/select2.min.js');

require('./vendor/moment.js');

require('./vendor/daterangepicker.js');

require('./vendor/slick.min.js');

require('./vendor/parallax100.js');

require('./vendor/jquery.magnific-popup.min.js');

require('./vendor/isotope.pkgd.min.js');

require('./vendor/sweetalert.min.js');

require('./vendor/perfect-scrollbar.min.js');

import PerfectScrollbar from 'perfect-scrollbar';

// perfect-scrollbar.min.js

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

/*[ Load page ]
===========================================================*/
$(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    loading: true,
    loadingParentElement: 'html',
    loadingClass: 'animsition-loading-1',
    loadingInner: '<div class="loader05"></div>',
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'html',
    transition: function(url){ window.location.href = url; }
});

/*[ Back to top ]
===========================================================*/
var windowH = $(window).height()/2;

$(window).on('scroll',function(){
    if ($(this).scrollTop() > windowH) {
        $("#myBtn").css('display','flex');
    } else {
        $("#myBtn").css('display','none');
    }
});

$('#myBtn').on("click", function(){
    $('html, body').animate({scrollTop: 0}, 300);
});


/*==================================================================
[ Fixed Header ]*/
var headerDesktop = $('.container-menu-desktop');
var wrapMenu = $('.wrap-menu-desktop');

if($('.top-bar').length > 0) {
    var posWrapHeader = $('.top-bar').height();
}
else {
    var posWrapHeader = 0;
}


if($(window).scrollTop() > posWrapHeader) {
    $(headerDesktop).addClass('fix-menu-desktop');
    $(wrapMenu).css('top',0); 
}  
else {
    $(headerDesktop).removeClass('fix-menu-desktop');
    $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
}

$(window).on('scroll',function(){
    if($(this).scrollTop() > posWrapHeader) {
        $(headerDesktop).addClass('fix-menu-desktop');
        $(wrapMenu).css('top',0); 
    }  
    else {
        $(headerDesktop).removeClass('fix-menu-desktop');
        $(wrapMenu).css('top',posWrapHeader - $(this).scrollTop()); 
    } 
});


/*==================================================================
[ Menu mobile ]*/
$('.btn-show-menu-mobile').on('click', function(){
    $(this).toggleClass('is-active');
    $('.menu-mobile').slideToggle();
});

var arrowMainMenu = $('.arrow-main-menu-m');

for(var i=0; i<arrowMainMenu.length; i++){
    $(arrowMainMenu[i]).on('click', function(){
        $(this).parent().find('.sub-menu-m').slideToggle();
        $(this).toggleClass('turn-arrow-main-menu-m');
    })
}

$(window).resize(function(){
    if($(window).width() >= 992){
        if($('.menu-mobile').css('display') == 'block') {
            $('.menu-mobile').css('display','none');
            $('.btn-show-menu-mobile').toggleClass('is-active');
        }

        $('.sub-menu-m').each(function(){
            if($(this).css('display') == 'block') { console.log('hello');
                $(this).css('display','none');
                $(arrowMainMenu).removeClass('turn-arrow-main-menu-m');
            }
        });
            
    }
});

/*==================================================================
[ Show / hide modal search ]*/
$('.js-show-modal-search').on('click', function(){
    $('.modal-search-header').addClass('show-modal-search');
    $(this).css('opacity','0');
});

$('.js-hide-modal-search').on('click', function(){
    $('.modal-search-header').removeClass('show-modal-search');
    $('.js-show-modal-search').css('opacity','1');
});

$('.container-search-header').on('click', function(e){
    e.stopPropagation();
});


/*==================================================================
[ Cart ]*/
$('.js-show-cart').on('click',function(){
    $('.js-panel-cart').addClass('show-header-cart');
});

$('.js-hide-cart').on('click',function(){
    $('.js-panel-cart').removeClass('show-header-cart');
});

/*==================================================================
[ Cart ]*/
$('.js-show-sidebar').on('click',function(){
    $('.js-sidebar').addClass('show-sidebar');
});

$('.js-hide-sidebar').on('click',function(){
    $('.js-sidebar').removeClass('show-sidebar');
});


/*==================================================================
[ Lista de deseos ]*/

$('#filas-producto').on('click','.btn-addwish-b2',function(e){
    e.preventDefault()

    var nameProduct = $(this).parent().parent().find('.js-name-b2').html();

    console.log(e)


    let productoId = e.target.dataset.producto

    let productosFavoritos = localStorage.getItem('favoritos')

    productosFavoritos = productosFavoritos ? JSON.parse(productosFavoritos) : []

    let index = productosFavoritos.findIndex(
        (element) => element == productoId
    );


    if (index == -1) {

        swal({
            title: nameProduct,
            text: "Añadido a tu lista de deseos.",
            icon: "success",    
        })    

        $(this).addClass('js-addedwish-b2');
        
        let nuevosFavoritos = productosFavoritos
        nuevosFavoritos.push(productoId)

        localStorage.setItem('favoritos', JSON.stringify(nuevosFavoritos))

        let cantidad = nuevosFavoritos.length


        $('#favoritos-desktop').attr('data-notify', cantidad)
        $('#favoritos-mobile').attr('data-notify', cantidad)

        obtenerFavoritos(nuevosFavoritos)

        
    } else {
        
        swal({
            title: nameProduct,
            text: "Se ha quitado de tu lista de deseos.",
            icon: "success",    
        })

        $(this).removeClass('js-addedwish-b2');

        let nuevosFavoritos = productosFavoritos
        nuevosFavoritos.splice(index, 1)

        localStorage.setItem('favoritos', JSON.stringify(nuevosFavoritos))
        
        let cantidad = nuevosFavoritos.length


        $('#favoritos-desktop').attr('data-notify', cantidad)
        $('#favoritos-mobile').attr('data-notify', cantidad)

        obtenerFavoritos(nuevosFavoritos)

    }
})

$('#filas-producto').find('.btn-addwish-b2').each( function () {

    let productoId = $(this)[0].dataset.producto

    let productosFavoritos = localStorage.getItem('favoritos')

    productosFavoritos = productosFavoritos ? JSON.parse(productosFavoritos) : []


    let index = productosFavoritos.findIndex(
        (element) => element == productoId
    );


    if (index !== -1) {


        $(this).addClass('js-addedwish-b2');


    }

})


let productos = localStorage.getItem('favoritos')

productos = productos ? JSON.parse(productos) : []

let cantidad = productos.length


$('#favoritos-desktop').attr('data-notify', cantidad)
$('#favoritos-mobile').attr('data-notify', cantidad)

$('#productos-favoritos-eliminar').on('click','.img-favoritos-eliminar',function(e){
    e.preventDefault()
    var nameProduct = e.target.dataset.productoNombre

    let productoId = e.target.dataset.producto

    let productosFavoritos = localStorage.getItem('favoritos')

    productosFavoritos = productosFavoritos ? JSON.parse(productosFavoritos) : []

    let index = productosFavoritos.findIndex(
        (element) => element == productoId
    )

    swal({
        title: nameProduct,
        text: "Se ha quitado de tu lista de deseos.",
        icon: "success",    
    })

    $(this).removeClass('js-addedwish-b2');

    let nuevosFavoritos = productosFavoritos
    nuevosFavoritos.splice(index, 1)

    localStorage.setItem('favoritos', JSON.stringify(nuevosFavoritos))
    
    let cantidad = nuevosFavoritos.length


    $('#favoritos-desktop').attr('data-notify', cantidad)
    $('#favoritos-mobile').attr('data-notify', cantidad)

    obtenerFavoritos(nuevosFavoritos)

})

obtenerFavoritos(productos)

async function obtenerFavoritos(productos) {

    console.log('hola')

    let productosFavoritos = {
        favoritos: productos
    }
    await axios.post(`/api/obtener_favoritos`, productosFavoritos)   
        .then(respuesta => {

            let limpiar = `<ul class="header-cart-wrapitem w-full" id="productos-favoritos">
					
            </ul>`
            $('#productos-favoritos').replaceWith(limpiar)

            respuesta.data.forEach(e => {
                
                let $fila =$(`
                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <a href="#" class="img-favoritos-eliminar" data-producto="${e.id}">
                                    <div class="header-cart-item-img" data-producto="${e.id}" data-producto-nombre="${e.nombre}">
                                        
                                            <img src="${window.location.origin}/${e.imagenes ? e.imagenes[0].url : ''}" alt="IMG" class="imagen-favoritos">
                                        
                                    </div>
                                </a>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="${window.location.origin}/productos/${e.id}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        ${e.nombre}
                                    </a>

                                    <span class="header-cart-item-info">
                                        S/. ${e.precio}
                                    </span>
                                </div>
                            </li>
                        `)
                $('#productos-favoritos').append($fila)
            })

        }) 
}


/*==================MENSAJE=========================================*/
console.log("%cSi est\xe1s leyendo este mensaje es que eres demasiado inteligente, CRACK!", "color: #bada55; font-weight: bold; font-size: 16px")