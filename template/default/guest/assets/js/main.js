/*global jQuery */
(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        /*---------------------------------
         All Window Scroll Function Start
        --------------------------------- */
        $(window).scroll(function () {
            // Scroll up Hide Show
            if ($(window).scrollTop() >= 500) {
                $('.scroll-top').fadeIn(600);
            } else {
                $('.scroll-top').fadeOut(600);
            }

            // Header Fix Js Here
            if ($(window).scrollTop() >= 180) {
                $('.header-top-area.version_2').addClass('fixtopmenu');
            } else {
                $('.header-top-area.version_2').removeClass('fixtopmenu');
            }
        });
        /*---------------------------------
         All Window Scroll Function End
        --------------------------------- */

        // Click to Scroll TOP
        $(".scroll-top").on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 1500);
        }); //Scroll TOP End

        // Responsive Menu
        $(".main-menu").slicknav({
            label: ''
        });

        // HomePage 2 Slider Carousel
        $("#home-slider").owlCarousel({
            loop: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 300,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: true,
            items: 1,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }); // HomePage Slider End

        // Service Area Carousel
        $(".service-wrapper").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplaySpeed: 1200,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            },
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }); // Service Carousel End

        // Reviews Area Counter
        $('.count-number').counterUp();

        // Portfolio Area Isotope
        $(".portfolio-menu span").on('click', function () {

            $(".portfolio-menu span").removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr('data-filter');
            $(".portfolio-gird").isotope({
                filter: filterValue
            });
        }); // Portfolio Isotope End

        // Video Area PopUp
        $('.video-icon').magnificPopup({
            type: 'iframe',
            removalDelay: 300,
            mainClass: 'mfp-fade'
        }); // Video PopUp End

        // Team Area Carousel
        $(".team-content-wrapper").owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 2
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            },
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }); // Team Carousel End

        // Client Area Carousel
        $(".clients-content-wrapper").owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplay: true,
            autoplaySpeed: 1200,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            },
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }); // Client Carousel End

        // Partner Area Carousel
        $(".partner-content-wrap").owlCarousel({
            loop: true,
            dots: false,
            margin: 20,
            autoplay: false,
            autoplaySpeed: 4000,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            nav: false,
            rtl: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                600: {
                    items: 2

                },
                768: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        }); // Paerner Carousel End

        // Portfolio Open Carousel
        $(".portfolio-thum-wrap").owlCarousel({
            loop: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 2500,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            items: 1,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        }); // Portfolio Open End

        // Smooth Scroll
        $('.hero-text a[href*="#"]:not([href="#"])').on("click", function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1500);
                    return false;
                }
            }
        }); //Smooth Scroll End

        //Home 1 Slideslow
        $("#slideslow-header").vegas({
            overlay: true,
            transition: 'fade',
            transitionDuration: 2000,
            delay: 4000,
            color: '#17D396',
            animation: 'random',
            animationDuration: 20000,
            slides: [{
                    src: 'assets/img/slider-img/slider-img-1.jpg'
                    },
                {
                    src: 'assets/img/slider-img/slider-img-2.jpg'
                    },
                {
                    src: 'assets/img/hero-area-bg.jpg'
                    }
                ]
        });
    }); //Ready Function End

    jQuery(window).on('load', function () {
        jQuery('.preloader').fadeOut();
        jQuery('.preloader-spinner').delay(350).fadeOut('slow');
        jQuery('body').removeClass('preloader-active');
        jQuery(".portfolio-gird").isotope();
    }); //window load End


}(jQuery));
