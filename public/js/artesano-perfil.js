/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/artesano-perfil.js ***!
  \*****************************************/
/*[ Show modal1 ]*/
$('#filas-producto').on('click', '.js-show-modal1', function (e) {
  var _producto$user$direcc, _producto$user$telefo;

  /*GUARDAR DATOS DE PRODUCTO-MEJORAR IMAGEN*/
  var producto = JSON.parse(e.target.dataset.producto); //todo PRODUCTO NOMBRE*/

  var productoNombre = "\n        <h1 class=\"mtext-105 cl2 js-name-detail p-b-14 edit-nombre-modal\">".concat(producto.nombre, "</h1>\n        ");
  $('#modal-producto-nombre').empty().append(productoNombre); //todo PRODUCTO PRECIO

  var productoPrecio = "\n        <span class=\"precio-producto mtext-108 cl5 precio-size\">\n            <img class=\"iconos\" src='".concat(window.location.origin, "/images/icons/precio-1.png'>S/. ").concat(producto.precio, "\n        </span>\n            ");
  $('#modal-producto-precio').empty().append(productoPrecio); //todo:PRODUCTO DESCRIPCION

  var productoDescripcion = "\n        <span>".concat(producto.descripcion, "</span>\n        ");
  $('#modal-producto-descripcion').empty().append(productoDescripcion); //todo:PRODUCTO DESCRIPCION ARTESANO FOTO

  var productoartesanoFoto = "\n        <img src= \"".concat(producto.user.profile_photo_url, "\">\n    ");
  $('#modal-producto-usuario-foto').empty().append(productoartesanoFoto); //todo:PRODUCTO DESCRIPCION ARTESANO NOMBREEE

  var productoartesanoNombre = "\n    <span>".concat(producto.user.name, "</span>\n    ");
  $('#modal-producto-user-name').empty().append(productoartesanoNombre); //todo:PRODUCTO DESCRIPCION ARTESANO EMPRESA

  var productoartesanoEmpresa = "\n    <span>".concat(producto.user.empresa, "</span>\n    ");
  $('#modal-producto-user-empresa').empty().append(productoartesanoEmpresa); //todo:PRODUCTO DESCRIPCION ARTESANO ASOCIACION

  var productoartesanoAsociacion = "\n    <span>".concat(producto.user.asociacion.nombre, "</span>\n    ");
  $('#modal-producto-user-asociacion').empty().append(productoartesanoAsociacion); //todo:PRODUCTO DESCRIPCION ARTESANO DIRECCION

  var productoartesanoDireccion = "\n    <span>".concat((_producto$user$direcc = producto.user.direccion) !== null && _producto$user$direcc !== void 0 ? _producto$user$direcc : '-', "</span>\n    ");
  $('#modal-producto-user-direccion').empty().append(productoartesanoDireccion); //todo:PRODUCTO DESCRIPCION ARTESANO DIRECCION

  var productoartesanoTelefono = "\n    <span>".concat((_producto$user$telefo = producto.user.telefono) !== null && _producto$user$telefo !== void 0 ? _producto$user$telefo : '-', "</span>\n    ");
  $('#modal-producto-user-telefono').empty().append(productoartesanoTelefono); //todo:MAPA

  var style = [{
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [{
      "color": "#e9e9e9"
    }, {
      "lightness": 17
    }]
  }, {
    "featureType": "landscape",
    "elementType": "geometry",
    "stylers": [{
      "color": "#f5f5f5"
    }, {
      "lightness": 20
    }]
  }, {
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [{
      "color": "#ffffff"
    }, {
      "lightness": 17
    }]
  }, {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [{
      "color": "#ffffff"
    }, {
      "lightness": 29
    }, {
      "weight": 0.2
    }]
  }, {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [{
      "color": "#ffffff"
    }, {
      "lightness": 18
    }]
  }, {
    "featureType": "road.local",
    "elementType": "geometry",
    "stylers": [{
      "color": "#ffffff"
    }, {
      "lightness": 16
    }]
  }, {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [{
      "color": "#f5f5f5"
    }, {
      "lightness": 21
    }]
  }, {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [{
      "color": "#dedede"
    }, {
      "lightness": 21
    }]
  }, {
    "elementType": "labels.text.stroke",
    "stylers": [{
      "visibility": "on"
    }, {
      "color": "#ffffff"
    }, {
      "lightness": 16
    }]
  }, {
    "elementType": "labels.text.fill",
    "stylers": [{
      "saturation": 36
    }, {
      "color": "#333333"
    }, {
      "lightness": 40
    }]
  }, {
    "elementType": "labels.icon",
    "stylers": [{
      "visibility": "off"
    }]
  }, {
    "featureType": "transit",
    "elementType": "geometry",
    "stylers": [{
      "color": "#f2f2f2"
    }, {
      "lightness": 19
    }]
  }, {
    "featureType": "administrative",
    "elementType": "geometry.fill",
    "stylers": [{
      "color": "#fefefe"
    }, {
      "lightness": 20
    }]
  }, {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [{
      "color": "#fefefe"
    }, {
      "lightness": 17
    }, {
      "weight": 1.2
    }]
  }];
  var img_pin = "".concat(window.location.origin, "/images/icons/pin-1.png");
  var latitude = producto.user.latitud;
  var longitude = producto.user.longitud;
  var scrollwhell = 1;
  var draggable = 1;
  var map_zoom = 18;
  var locations = [['<div class="infobox"><h4>Hola.!!</h4><p>Encuentrame en este punto, te espero.</p></div>', latitude, longitude, 2]];
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
    google.maps.event.addListener(marker, 'click', function (marker, i) {
      return function () {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      };
    }(marker, i));
  }

  producto.imagenes.forEach(function (imagen) {
    var img = "\n        <div class=\"item-slick3\" data-thumb=\"".concat(window.location.origin, "/").concat(imagen.url, "\">\n            <div class=\"wrap-pic-w pos-relative detalle-imagen-modal\">\n                <img src=\"").concat(window.location.origin, "/").concat(imagen.url, "\" alt=\"IMG-PRODUCT\">\n\n                <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"").concat(window.location.origin, "/").concat(imagen.url, "\" >\n                    <i class=\"fa fa-expand\"></i>\n                </a>\n            </div>\n        </div>");
    $('#modal-producto-imagenes').append(img);
  });
  $('.wrap-slick3').each(function () {
    $(this).find('.slick3').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      infinite: true,
      autoplay: false,
      autoplaySpeed: 6000,
      arrows: true,
      appendArrows: $(this).find('.wrap-slick3-arrows'),
      prevArrow: '<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
      nextArrow: '<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
      adaptiveHeight: true,
      dots: true,
      appendDots: $(this).find('.wrap-slick3-dots'),
      dotsClass: 'slick3-dots',
      customPaging: function customPaging(slick, index) {
        var portrait = $(slick.$slides[index]).data('thumb');
        return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
      }
    });
  });
  $('.gallery-lb').each(function () {
    // the containers for all your galleries
    $(this).magnificPopup({
      delegate: 'a',
      // the selector for gallery item
      type: 'image',
      gallery: {
        enabled: true
      },
      mainClass: 'mfp-fade'
    });
  });
  e.preventDefault();
  $('.js-modal1').addClass('show-modal1');
});
$('.js-hide-modal1').on('click', function () {
  $('.js-modal1').removeClass('show-modal1');
  var limpiar = "\n    <div id=\"modal-producto-limpiar\" class=\"wrap-slick3 flex-sb flex-w\">\n        <div class=\"wrap-slick3-dots\"></div>\n        <div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>\n        <div id=\"modal-producto-imagenes\" class=\"slick3 gallery-lb\"></div>\n    </div>";
  $('#modal-producto-limpiar').replaceWith(limpiar);
}); //todo:MAPA

var style = [{
  "featureType": "water",
  "elementType": "geometry",
  "stylers": [{
    "color": "#e9e9e9"
  }, {
    "lightness": 17
  }]
}, {
  "featureType": "landscape",
  "elementType": "geometry",
  "stylers": [{
    "color": "#f5f5f5"
  }, {
    "lightness": 20
  }]
}, {
  "featureType": "road.highway",
  "elementType": "geometry.fill",
  "stylers": [{
    "color": "#ffffff"
  }, {
    "lightness": 17
  }]
}, {
  "featureType": "road.highway",
  "elementType": "geometry.stroke",
  "stylers": [{
    "color": "#ffffff"
  }, {
    "lightness": 29
  }, {
    "weight": 0.2
  }]
}, {
  "featureType": "road.arterial",
  "elementType": "geometry",
  "stylers": [{
    "color": "#ffffff"
  }, {
    "lightness": 18
  }]
}, {
  "featureType": "road.local",
  "elementType": "geometry",
  "stylers": [{
    "color": "#ffffff"
  }, {
    "lightness": 16
  }]
}, {
  "featureType": "poi",
  "elementType": "geometry",
  "stylers": [{
    "color": "#f5f5f5"
  }, {
    "lightness": 21
  }]
}, {
  "featureType": "poi.park",
  "elementType": "geometry",
  "stylers": [{
    "color": "#dedede"
  }, {
    "lightness": 21
  }]
}, {
  "elementType": "labels.text.stroke",
  "stylers": [{
    "visibility": "on"
  }, {
    "color": "#ffffff"
  }, {
    "lightness": 16
  }]
}, {
  "elementType": "labels.text.fill",
  "stylers": [{
    "saturation": 36
  }, {
    "color": "#333333"
  }, {
    "lightness": 40
  }]
}, {
  "elementType": "labels.icon",
  "stylers": [{
    "visibility": "off"
  }]
}, {
  "featureType": "transit",
  "elementType": "geometry",
  "stylers": [{
    "color": "#f2f2f2"
  }, {
    "lightness": 19
  }]
}, {
  "featureType": "administrative",
  "elementType": "geometry.fill",
  "stylers": [{
    "color": "#fefefe"
  }, {
    "lightness": 20
  }]
}, {
  "featureType": "administrative",
  "elementType": "geometry.stroke",
  "stylers": [{
    "color": "#fefefe"
  }, {
    "lightness": 17
  }, {
    "weight": 1.2
  }]
}];
var img_pin = "".concat(window.location.origin, "/images/icons/pin-1.png");
var selector_map = $('#mapa-perfil-artesano');
var data_map_x = selector_map.attr('data-map-x');
var data_map_y = selector_map.attr('data-map-y');
var latitude = data_map_x;
var longitude = data_map_y;
var scrollwhell = 1;
var draggable = 1;
var map_zoom = 16;
var locations = [['<div class="infobox"><h4>Hola.!!</h4><p>Encuentrame en este punto, te espero.</p></div>', latitude, longitude, 2]];
var map = new google.maps.Map(document.getElementById('mapa-perfil-artesano'), {
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
  google.maps.event.addListener(marker, 'click', function (marker, i) {
    return function () {
      infowindow.setContent(locations[i][0]);
      infowindow.open(map, marker);
    };
  }(marker, i));
}
/******/ })()
;