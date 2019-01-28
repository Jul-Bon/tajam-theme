(function ($) {
    $('.single-item').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
    });

    $('.slider-for').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        centerMode: true,
        focusOnSelect: true,
        variableWidth: true
    });

    //Script for the Scroll
    $('.main-menu .menu-item a').on('click', function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);

    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > '250') {
            $('.site-navigation ').addClass('scrolled-menu');
        } else {
            $('.site-navigation ').removeClass('scrolled-menu');
        }
    });

    //Script for the menu
    $('.toggle-menu').on('click', function () {
        $('.toggle-menu').toggleClass('toggled ');
        $('.main-nav .menu.nav-menu').toggleClass('open-menu');
    });

    if (window.matchMedia('(max-width: 768px)').matches) {
        $('.main-nav .menu-item').on('click', function () {
            $('.main-nav .menu.nav-menu').removeClass('open-menu');
            $('.toggle-menu').removeClass('toggled');
        });
    }

    //script for video
    $(document).on('click', '.play-button', function () {
        var $video = $('#video'),
            src = $video.attr('src');
        $video.attr('src', src + '&autoplay=1');
        setTimeout(function () {
            $('.our-story__video-overlay').slideUp(300);
        }, 600);
    });

})(jQuery);


