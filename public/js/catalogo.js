/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/catalogo.js ***!
  \**********************************/
(function ($) {
  "use strict"; // select 2

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
        },
        getSortData: {
          // precio: '.precio-producto parseInt',
          // category: '[data-category]',
          precioAsc: function precioAsc(itemElem) {
            var precio = $(itemElem).find('.precio-producto').attr('data-precio');
            return parseFloat(precio);
          },
          precioDesc: function precioDesc(itemElem) {
            var precio = $(itemElem).find('.precio-producto').attr('data-precio');
            return parseFloat(precio);
          }
        },
        sortAscending: {
          precioAsc: true,
          precioDesc: false
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
  /*================= Ordenar elementos ===================================*/

  var isotopeButtonOrder = $('.order-link a'); // para marcar y desmarar la opcion en la que se encuentra

  $(isotopeButtonOrder).each(function () {
    $(this).on('click', function (e) {
      e.preventDefault();

      for (var i = 0; i < isotopeButtonOrder.length; i++) {
        $(isotopeButtonOrder[i]).removeClass('filter-link-active');
      }

      $(this).addClass('filter-link-active');
      var sortByValue = $(this).attr('data-sort-by');
      $topeContainer.isotope({
        sortBy: sortByValue
      });
    });
  });
  /*================= filtrador de precios ===================================*/

  var funcionesParaLosFiltros = {
    preciosEntre0a30: function preciosEntre0a30() {
      var precio = $(this).find('.precio-producto').attr('data-precio');
      return parseFloat(precio) >= 0 && parseFloat(precio) <= 30;
    },
    preciosEntre30a60: function preciosEntre30a60() {
      var precio = $(this).find('.precio-producto').attr('data-precio');
      return parseFloat(precio) >= 30 && parseFloat(precio) <= 60;
    },
    preciosEntre60a90: function preciosEntre60a90() {
      var precio = $(this).find('.precio-producto').attr('data-precio');
      return parseFloat(precio) >= 60 && parseFloat(precio) <= 90;
    },
    preciosEntre90a120: function preciosEntre90a120() {
      var precio = $(this).find('.precio-producto').attr('data-precio');
      return parseFloat(precio) >= 90 && parseFloat(precio) <= 120;
    },
    preciosEntre120aMas: function preciosEntre120aMas() {
      var precio = $(this).find('.precio-producto').attr('data-precio');
      return parseFloat(precio) >= 120;
    }
  };
  var isotopeButtonFilterPrice = $('.filter-link-precio a'); // para marcar y desmarar la opcion en la que se encuentra

  $(isotopeButtonFilterPrice).each(function () {
    $(this).on('click', function (e) {
      e.preventDefault();

      for (var i = 0; i < isotopeButtonFilterPrice.length; i++) {
        $(isotopeButtonFilterPrice[i]).removeClass('filter-link-active');
      }

      $(this).addClass('filter-link-active');
      var filterValue = $(this).attr('data-filter');
      filterValue = funcionesParaLosFiltros[filterValue] || filterValue;
      $topeContainer.isotope({
        filter: filterValue
      });
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
      var img = "\n            <div class=\"item-slick3\" data-thumb=\"storage/".concat(imagen.url, "\">\n                <div class=\"wrap-pic-w pos-relative\">\n                    <img src=\"storage/").concat(imagen.url, "\" alt=\"IMG-PRODUCT\">\n\n                    <a class=\"flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04\" href=\"storage/").concat(imagen.url, "\">\n                        <i class=\"fa fa-expand\"></i>\n                    </a>\n                </div>\n            </div>");
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
    var limpiar = "\n        <div id=\"modal-producto-limpiar\" class=\"wrap-slick3 flex-sb flex-w\">\n            <div class=\"wrap-slick3-dots\"></div>\n            <div class=\"wrap-slick3-arrows flex-sb-m flex-w\"></div>\n            <div id=\"modal-producto-imagenes\" class=\"slick3 gallery-lb\"></div>\n        </div>";
    $('#modal-producto-limpiar').replaceWith(limpiar);
  }); //BOTON MOSTRAR MÁS

  var inicio = 32;
  document.getElementById("ver-mas").addEventListener("click", function (e) {
    e.preventDefault();
    var cantidad_de_productos = e.target.dataset.cantidad;
    console.log($('#ver-mas'));
    console.log(inicio);
    ajax();

    if (inicio >= cantidad_de_productos) {
      return $('#ver-mas').remove();
    }
  });

  function ajax() {
    console.log($topeContainer);
    var http = new XMLHttpRequest();
    var url = '/catalogo/productos/' + (inicio - 16);

    http.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        inicio += 16;
        var productos = JSON.parse(this.responseText);
        console.log(productos);
        productos.forEach(function (producto) {
          var productoTemp = JSON.stringify(producto);
          var remplace = /"/gi;
          var productWithNewFormat = productoTemp.replace(remplace, '&quot;');
          var categorias = "";
          producto.categorias.forEach(function (categoria) {
            categorias += categoria.slug + ' ';
          });
          var $fila = $("\n                    <div class=\"col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ".concat(categorias, "\" >\n                    <!-- Block2 -->\n                        <div class=\"block2\">\n                            <div class=\"block2-pic hov-img0\">\n                                <img src=\"storage/").concat(producto.imagenes[0].url, "\" alt=\"IMG-PRODUCT\">\n                                <a href=\"#\" class=\"block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1\" data-producto=\"").concat(productWithNewFormat, "\">\n                                    Vista R\xE1pida\n                                </a>\n                            </div>\n            \n                            <div class=\"block2-txt flex-w flex-t p-t-14\">\n                                <div class=\"block2-txt-child1 flex-col-l \">\n                                    <a href=\"product-detail.html\" class=\"stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6\">\n                                        ").concat(producto.nombre, "\n                                    </a>\n                    \n                                    <span class=\"precio-producto stext-105 cl3\" data-precio=\"").concat(producto.precio, "\">\n                                        <i>S/. ").concat(producto.precio, " </i>\n                                    </span>\n                                </div>\n                            </div>\n                        </div>\n                    </div>")); // $('#filas-producto').append(filas)

          $topeContainer.append($fila).isotope('appended', $fila);
        });
      }
    };

    http.open("GET", url);
    http.send();
  }
})(jQuery);
/******/ })()
;