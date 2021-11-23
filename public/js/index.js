/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
// select 2
$(".js-select2").each(function () {
  $(this).select2({
    minimumResultsForSearch: 20,
    dropdownParent: $(this).next('.dropDownSelect2')
  });
}); // jquery.magnific-popup.min.js

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
}); //sweetalert.min.js

$('.js-addwish-b2').on('click', function (e) {
  e.preventDefault();
});
$('.js-addwish-b2').each(function () {
  var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
  $(this).on('click', function () {
    swal(nameProduct, "is added to wishlist !", "success");
    $(this).addClass('js-addedwish-b2');
    $(this).off('click');
  });
});
$('.js-addwish-detail').each(function () {
  var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();
  $(this).on('click', function () {
    swal(nameProduct, "is added to wishlist !", "success");
    $(this).addClass('js-addedwish-detail');
    $(this).off('click');
  });
});
/---------------------------------------------/;
$('.js-addcart-detail').each(function () {
  var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
  $(this).on('click', function () {
    swal(nameProduct, "is added to cart !", "success");
  });
});
/*==================================================================
[ Show / hide modal search ]*/

$('.js-show-modal-search').on('click', function () {
  $('.modal-search-header').addClass('show-modal-search');
  $(this).css('opacity', '0');
});
$('.js-hide-modal-search').on('click', function () {
  $('.modal-search-header').removeClass('show-modal-search');
  $('.js-show-modal-search').css('opacity', '1');
});
$('.container-search-header').on('click', function (e) {
  e.stopPropagation();
});
/*==================================================================
[ Isotope ]*/

var $topeContainer = $('.isotope-grid');
var $filter = $('.filter-tope-group'); // filter items on button click

$filter.each(function () {
  $filter.on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    $topeContainer.isotope({
      filter: filterValue
    });
  });
}); // init Isotope

$(window).on('load', function () {
  var $grid = $topeContainer.each(function () {
    $(this).isotope({
      itemSelector: '.isotope-item',
      layoutMode: 'fitRows',
      percentPosition: true,
      animationEngine: 'best-available',
      masonry: {
        columnWidth: '.isotope-item'
      }
    });
  });
});
var isotopeButton = $('.filter-tope-group button');
$(isotopeButton).each(function () {
  $(this).on('click', function () {
    for (var i = 0; i < isotopeButton.length; i++) {
      $(isotopeButton[i]).removeClass('how-active1');
    }

    $(this).addClass('how-active1');
  });
});
/*==================================================================
[ Filter / Search product ]*/

$('.js-show-filter').on('click', function () {
  $(this).toggleClass('show-filter');
  $('.panel-filter').slideToggle(400);

  if ($('.js-show-search').hasClass('show-search')) {
    $('.js-show-search').removeClass('show-search');
    $('.panel-search').slideUp(400);
  }
});
$('.js-show-search').on('click', function () {
  $(this).toggleClass('show-search');
  $('.panel-search').slideToggle(400);

  if ($('.js-show-filter').hasClass('show-filter')) {
    $('.js-show-filter').removeClass('show-filter');
    $('.panel-filter').slideUp(400);
  }
});
/*==================================================================
[ Cart ]*/

$('.js-show-cart').on('click', function () {
  $('.js-panel-cart').addClass('show-header-cart');
});
$('.js-hide-cart').on('click', function () {
  $('.js-panel-cart').removeClass('show-header-cart');
});
/*==================================================================
[ Cart ]*/

$('.js-show-sidebar').on('click', function () {
  $('.js-sidebar').addClass('show-sidebar');
});
$('.js-hide-sidebar').on('click', function () {
  $('.js-sidebar').removeClass('show-sidebar');
});
/*==================================================================
[ +/- num product ]*/

$('.btn-num-product-down').on('click', function () {
  var numProduct = Number($(this).next().val());
  if (numProduct > 0) $(this).next().val(numProduct - 1);
});
$('.btn-num-product-up').on('click', function () {
  var numProduct = Number($(this).prev().val());
  $(this).prev().val(numProduct + 1);
});
/*==================================================================
[ Rating ]*/

$('.wrap-rating').each(function () {
  var item = $(this).find('.item-rating');
  var rated = -1;
  var input = $(this).find('input');
  $(input).val(0);
  $(item).on('mouseenter', function () {
    var index = item.index(this);
    var i = 0;

    for (i = 0; i <= index; i++) {
      $(item[i]).removeClass('zmdi-star-outline');
      $(item[i]).addClass('zmdi-star');
    }

    for (var j = i; j < item.length; j++) {
      $(item[j]).addClass('zmdi-star-outline');
      $(item[j]).removeClass('zmdi-star');
    }
  });
  $(item).on('click', function () {
    var index = item.index(this);
    rated = index;
    $(input).val(index + 1);
  });
  $(this).on('mouseleave', function () {
    var i = 0;

    for (i = 0; i <= rated; i++) {
      $(item[i]).removeClass('zmdi-star-outline');
      $(item[i]).addClass('zmdi-star');
    }

    for (var j = i; j < item.length; j++) {
      $(item[j]).addClass('zmdi-star-outline');
      $(item[j]).removeClass('zmdi-star');
    }
  });
});
/*==================================================================
[ Show modal1 ]*/

$('#filas-producto').on('click', '.js-show-modal1', function (e) {
  /*GUARDAR DATOS DE PRODUCTO-MEJORAR IMAGEN*/
  var producto = JSON.parse(e.target.dataset.producto);
  $('#modal-producto-nombre').text(producto.nombre);
  $('#modal-producto-precio').text('S/. ' + producto.precio);
  $('#modal-producto-descripcion').text(producto.descripcion);
  producto.imagenes.forEach(function (imagen) {
    var img = "\n        <div class=\"item-slick3\" data-thumb=\"storage/".concat(imagen.url, "\">\n            <div class=\"wrap-pic-w pos-relative\">\n                <img src=\"storage/").concat(imagen.url, "\" alt=\"IMG-PRODUCT\">\n\n                <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"storage/").concat(imagen.url, "\">\n                    <i class=\"fa fa-expand\"></i>\n                </a>\n            </div>\n        </div>");
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
      dots: true,
      appendDots: $(this).find('.wrap-slick3-dots'),
      dotsClass: 'slick3-dots',
      customPaging: function customPaging(slick, index) {
        var portrait = $(slick.$slides[index]).data('thumb');
        return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
      }
    });
  });
  e.preventDefault();
  $('.js-modal1').addClass('show-modal1');
});
$('.js-hide-modal1').on('click', function () {
  $('.js-modal1').removeClass('show-modal1');
  var limpiar = "\n    <div id=\"modal-producto-limpiar\" class=\"wrap-slick3 flex-sb flex-w\">\n        <div class=\"wrap-slick3-dots\"></div>\n        <div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>\n        <div id=\"modal-producto-imagenes\" class=\"slick3 gallery-lb\"></div>\n    </div>";
  $('#modal-producto-limpiar').replaceWith(limpiar);
});
/*==================================================================
[ Slick1 ]*/

$('.wrap-slick1').each(function () {
  var wrapSlick1 = $(this);
  var slick1 = $(this).find('.slick1');
  var itemSlick1 = $(slick1).find('.item-slick1');
  var layerSlick1 = $(slick1).find('.layer-slick1');
  var actionSlick1 = [];
  $(slick1).on('init', function () {
    var layerCurrentItem = $(itemSlick1[0]).find('.layer-slick1');

    for (var i = 0; i < actionSlick1.length; i++) {
      clearTimeout(actionSlick1[i]);
    }

    $(layerSlick1).each(function () {
      $(this).removeClass($(this).data('appear') + ' visible-true');
    });

    for (var i = 0; i < layerCurrentItem.length; i++) {
      actionSlick1[i] = setTimeout(function (index) {
        $(layerCurrentItem[index]).addClass($(layerCurrentItem[index]).data('appear') + ' visible-true');
      }, $(layerCurrentItem[i]).data('delay'), i);
    }
  });
  var showDot = false;

  if ($(wrapSlick1).find('.wrap-slick1-dots').length > 0) {
    showDot = true;
  }

  $(slick1).slick({
    pauseOnFocus: false,
    pauseOnHover: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 1000,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 6000,
    arrows: true,
    appendArrows: $(wrapSlick1),
    prevArrow: '<button class="arrow-slick1 prev-slick1"><i class="zmdi zmdi-caret-left"></i></button>',
    nextArrow: '<button class="arrow-slick1 next-slick1"><i class="zmdi zmdi-caret-right"></i></button>',
    dots: showDot,
    appendDots: $(wrapSlick1).find('.wrap-slick1-dots'),
    dotsClass: 'slick1-dots',
    customPaging: function customPaging(slick, index) {
      var linkThumb = $(slick.$slides[index]).data('thumb');
      var caption = $(slick.$slides[index]).data('caption');
      return '<img src="' + linkThumb + '">' + '<span class="caption-dots-slick1">' + caption + '</span>';
    }
  });
  $(slick1).on('afterChange', function (event, slick, currentSlide) {
    var layerCurrentItem = $(itemSlick1[currentSlide]).find('.layer-slick1');

    for (var i = 0; i < actionSlick1.length; i++) {
      clearTimeout(actionSlick1[i]);
    }

    $(layerSlick1).each(function () {
      $(this).removeClass($(this).data('appear') + ' visible-true');
    });

    for (var i = 0; i < layerCurrentItem.length; i++) {
      actionSlick1[i] = setTimeout(function (index) {
        $(layerCurrentItem[index]).addClass($(layerCurrentItem[index]).data('appear') + ' visible-true');
      }, $(layerCurrentItem[i]).data('delay'), i);
    }
  });
});
/*==================================================================
[ Slick2 ]*/

$('.wrap-slick2').each(function () {
  $(this).find('.slick2').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 6000,
    arrows: true,
    appendArrows: $(this),
    prevArrow: '<button class="arrow-slick2 prev-slick2"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    nextArrow: '<button class="arrow-slick2 next-slick2"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
});
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var nameTab = $(e.target).attr('href');
  $(nameTab).find('.slick2').slick('reinit');
});
/*==================================================================
[ Slick3 ]*/
// $('.wrap-slick3').each(function(){
//     $(this).find('.slick3').slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         fade: true,
//         infinite: true,
//         autoplay: false,
//         autoplaySpeed: 6000,
//         arrows: true,
//         appendArrows: $(this).find('.wrap-slick3-arrows'),
//         prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
//         nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
//         dots: true,
//         appendDots: $(this).find('.wrap-slick3-dots'),
//         dotsClass:'slick3-dots',
//         customPaging: function(slick, index) {
//             var portrait = $(slick.$slides[index]).data('thumb');
//             return '<img src=" ' + portrait + ' "/><div class="slick3-dot-overlay"></div>';
//         },  
//     });
// });
/******/ })()
;