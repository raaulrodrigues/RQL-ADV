var $ = jQuery;

$(document).ready(function($) {
    dynamicSpacer();
    fullFirstScreen();

    $('.wrapper-professionals .slider-professionals').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: $('#related-professionals .arrow-prev button'),
        nextArrow: $('#related-professionals .arrow-next button'),
        dots: false,
        responsive: [
            {
                breakpoint: 1370,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.wrapper-lawyers .slider-lawyers').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        prevArrow: $('#related-lawyers .arrow-prev button'),
        nextArrow: $('#related-lawyers .arrow-next button'),
        dots: false,
        responsive: [
            {
                breakpoint: 1370,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
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

$(window).on('load', function(){
    dynamicSpacer();
    fullFirstScreen();
    scrollToSection(50);
    try {
        animateScrollPage();
    } catch (error) {
        console.log('Sem hash na url');
    };
});

$(window).resize(function(){
    dynamicSpacer();
    fullFirstScreen();
});

$(window).on('scroll', function () {
});

function dynamicSpacer(){
    var height = $('#stickyHeader').outerHeight();
    $('.dynamicSpacer').height(height);
}

function fullFirstScreen(){
    var headerHeight = $('#stickyHeader').outerHeight();
    var windowHeight = $(window).height();
    var offset = 0;
    var finalHeight = windowHeight - headerHeight - offset;
    if(finalHeight < 400) finalHeight = 400;
    $('.fullFirstScreen').css('height', finalHeight + 'px');
}

function scrollToSection(offset) {
    $('.scrollTo>a').on('click', function (event) {
        event.preventDefault();
        var target = this.hash;
        $('#wrapper-toggle-menu').removeClass('active');
        $('.hamburger').removeClass('is-active');
        if (target) {
            $('html, body').scrollTo(target, 200, {
                offset: -offset
            });
        }
    });
}

function animateScrollPage(offset) {
    var hash = window.location.hash.substring(1);
    var tag = $("#" + hash + "");
    if (hash) {
        $('html, body').animate({
            scrollTop: $(tag).offset().top - offset
        }, 250);
    } else {
        console.log("Sem nenhum âncora");
    }
}