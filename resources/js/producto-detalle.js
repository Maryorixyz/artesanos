$('.wrap-slick4').each(function(){
    $(this).find('.slick4').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 6000,

        arrows: true,
        appendArrows: $(this).find('.wrap-slick4-arrows'),
        prevArrow:'<button class="arrow-slick4 prev-slick4"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button class="arrow-slick4 next-slick4"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

        adaptiveHeight: true,

        dots: true,
        appendDots: $(this).find('.wrap-slick4-dots'),
        dotsClass:'slick4-dots',
        customPaging: function(slick, index) {
            var portrait = $(slick.$slides[index]).data('thumb');
            return '<img src=" ' + portrait + ' "/><div class="slick4-dot-overlay"></div>';
        },  
    });
});

$('.gallery-lb4').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
            enabled:true
        },
        mainClass: 'mfp-fade'
    });
});

/*====================================[ Slick2 ]===================================*/
$('.wrap-slick2').each(function(){
    $(this).find('.slick2').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 6000,
        arrows: true,
        appendArrows: $(this),
        prevArrow:'<button class="arrow-slick2 prev-slick2"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button class="arrow-slick2 next-slick2"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',  
        responsive: [
        {
            breakpoint: 1200,
            settings: {
            slidesToShow: 4,
            slidesToScroll: 4
            }
        },
        {
            breakpoint: 992,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 2
            }
        },
        {
            breakpoint: 576,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            }
        }
        ]    
    });
    });


$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var nameTab = $(e.target).attr('href'); 
    $(nameTab).find('.slick2').slick('reinit');          
})


/*[ Show modal1 ]*/
$('#filas-producto').on('click','.js-show-modal1',function(e){
    /*GUARDAR DATOS DE PRODUCTO-MEJORAR IMAGEN*/

    e.preventDefault();
    let producto = JSON.parse(e.target.dataset.producto)


    //todo PRODUCTO NOMBRE*/
    let productoNombre = `
        <h1 class="mtext-105 cl2 js-name-detail p-b-14 edit-nombre-modal">${producto.nombre}</h1>
        `

    $('#modal-producto-nombre').empty().append(productoNombre)
    
    //todo PRODUCTO PRECIO
    let productoPrecio = `
        <span class="precio-producto mtext-108 cl5 precio-size">
            <img class="iconos" src='${window.location.origin}/images/icons/precio-1.png'>S/. ${producto.precio}
        </span>
            `
    $('#modal-producto-precio').empty().append(productoPrecio)

    //todo:PRODUCTO DESCRIPCION
    let productoDescripcion = `
        <span>${producto.descripcion}</span>
        `
    $('#modal-producto-descripcion').empty().append(productoDescripcion)

    //todo:PRODUCTO DESCRIPCION ARTESANO FOTO
    let productoartesanoFoto = `
        <img src= "${producto.user.profile_photo_url}">
    `
    $('#modal-producto-usuario-foto').empty().append(productoartesanoFoto)

    //todo:PRODUCTO DESCRIPCION ARTESANO NOMBREEE
    let productoartesanoNombre = `
    <span>${producto.user.name}</span>
    `
    $('#modal-producto-user-name').empty().append(productoartesanoNombre)

    //todo:PRODUCTO DESCRIPCION ARTESANO EMPRESA
    let productoartesanoEmpresa = `
    <span>${producto.user.empresa}</span>
    `
    $('#modal-producto-user-empresa').empty().append(productoartesanoEmpresa)

    //todo:PRODUCTO DESCRIPCION ARTESANO ASOCIACION
    let productoartesanoAsociacion = `
    <span>${producto.user.asociacion.nombre}</span>
    `
    $('#modal-producto-user-asociacion').empty().append(productoartesanoAsociacion)

    
    //todo:PRODUCTO DESCRIPCION ARTESANO DIRECCION
    let productoartesanoDireccion = `
    <span>${producto.user.direccion ?? '-'}</span>
    `
    $('#modal-producto-user-direccion').empty().append(productoartesanoDireccion)

    //todo:PRODUCTO DESCRIPCION ARTESANO DIRECCION
    let productoartesanoTelefono = `
    <span>${producto.user.telefono ?? '-'}</span>
    `
    $('#modal-producto-user-telefono').empty().append(productoartesanoTelefono)
    
    //todo:MAPA
    var style = [
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
            ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [
            {
                "visibility": "off"
            }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
            ]
        }
    ];
    var img_pin = `${window.location.origin}/images/icons/pin-1.png`;

    var latitude = producto.user.latitud;
    var longitude = producto.user.longitud;
    var scrollwhell = 1;
    var draggable = 1;
    var map_zoom = 18;
    var locations = [
        ['<div class="infobox"><h4>Hola.!!</h4><p>Encuentrame en este punto, te espero.</p></div>'
            , latitude, longitude, 2]
    ];

    var map = new google.maps.Map(document.getElementById('modal-producto-usuario-map'), {
        zoom: Number(map_zoom),
        zoomControl: false,  
        disableDoubleClickZoom: true,
        scrollwheel: scrollwhell,
        navigationControl: true,
        mapTypeControl: false,
        scaleControl: false,
        draggable: draggable,
        styles: style,
        center: new google.maps.LatLng(latitude, longitude),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {

        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map,
            icon: img_pin
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }

    producto.imagenes.forEach(imagen => {
        let img = `
        <div class="item-slick3" data-thumb="${window.location.origin}/${imagen.url}">
            <div class="wrap-pic-w pos-relative detalle-imagen-modal">
                <img src="${window.location.origin}/${imagen.url}" alt="IMG-PRODUCT">

                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="${window.location.origin}/${imagen.url}" >
                    <i class="fa fa-expand"></i>
                </a>
            </div>
        </div>`

        $('#modal-producto-imagenes').append(img)
    });


    $('.wrap-slick3').each(function(){
        $(this).find('.slick3').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            infinite: true,
            autoplay: false,
            autoplaySpeed: 6000,

            arrows: true,
            appendArrows: $(this).find('.wrap-slick3-arrows'),
            prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',

            adaptiveHeight: true,

            dots: true,
            appendDots: $(this).find('.wrap-slick3-dots'),
            dotsClass:'slick3-dots',
            customPaging: function(slick, index) {
                var portrait = $(slick.$slides[index]).data('thumb');
                return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
            },  
        });
    });

    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            },
            mainClass: 'mfp-fade'
        });
    });

    
    $('.js-modal1').addClass('show-modal1');
});

$('.js-hide-modal1').on('click',function(){

    $('.js-modal1').removeClass('show-modal1');

    let limpiar = `
    <div id="modal-producto-limpiar" class="wrap-slick3 flex-sb flex-w">
        <div class="wrap-slick3-dots"></div>
        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
        <div id="modal-producto-imagenes" class="slick3 gallery-lb"></div>
    </div>`
    $('#modal-producto-limpiar').replaceWith(limpiar)
});