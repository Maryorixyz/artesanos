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