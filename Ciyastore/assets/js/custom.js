//POTENZA var

(function($) {
    "use strict";
    var POTENZA = {};

    /*************************
  Predefined Variables
*************************/
    var $window = $(window),
        $document = $(document),
        $body = $('body'),
        $countdownTimer = $('.countdown')

    //Check if function exists
    $.fn.exists = function() {
        return this.length > 0;
    };

    /*************************
     Bootstrap Plugins
    *************************/
    $('#myTab a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $('.top-menu li:last-child a').on('click', function () {
        $('#pgs_login_form').modal('show')
    })

    $('.search-button').on('click', function () {
        $('#search-popup').modal('show')
    })

    /*************************
          tooltip
    *************************/
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    /*************************
            Preloader
    *************************/
    POTENZA.preloader = function() {
        $('#preloader').delay(0).fadeOut('slow');
    };

    /*************************
           Mega menu
    *************************/
    POTENZA.megaMenu = function() {
        loadScript(plugin_path + 'mega_menu.min.js', function() {
            var nav = $('#menu');
            var l = nav.attr('data-pos');
            var pos = 'horizontal';
            if (l) pos = l;
            nav.megaMenu({
                // DESKTOP MODE SETTINGS
                logo_align: 'left', // align the logo left or right. options (left) or (right)
                links_align: 'left', // align the links left or right. options (left) or (right)
                socialBar_align: 'left', // align the socialBar left or right. options (left) or (right)
                searchBar_align: 'right', // align the search bar left or right. options (left) or (right)
                trigger: 'hover', // show drop down using click or hover. options (hover) or (click)
                effect: 'expand-top', // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
                effect_speed: 400, // drop down show speed in milliseconds
                sibling: true, // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
                outside_click_close: true, // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
                top_fixed: false, // fixed the menu top of the screen. options (true) or (false)
                sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
                sticky_header_height: 250, // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
                menu_position: pos, // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
                full_width: false, // make menu full width. options (true) or (false)
                // MOBILE MODE SETTINGS
                mobile_settings: {
                    collapse: true, // collapse the menu on click. options (true) or (false)
                    sibling: true, // hide the others showing drop downs when click on current drop down. options (true) or (false)
                    scrollBar: true, // enable the scroll bar. options (true) or (false)
                    scrollBar_height: 400, // scroll bar height in px value. this option works if the scrollBar option true.
                    top_fixed: false, // fixed menu top of the screen. options (true) or (false)
                    sticky_header: false, // menu fixed on top when scroll down down. options (true) or (false)
                    sticky_header_height: 200 // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
                }
            });
            // Dynamic active menu
            var path = window.location.pathname.split("/").pop();
            var target = $('header .mega-menu a[href="' + path + '"]');
            target.parent().addClass('active');
            $('header .mega-menu li.active').parents('li').addClass('active');

        });

        var current = location.pathname;
        $('.header-nav ul li a').each(function() {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.addClass('active');
            }
        })
    }


    /*************************
            Slick Nav
    *************************/
    POTENZA.slickNav = function() {
        var slicknav = jQuery(".slicknav");
        if (slicknav.length > 0) {
            loadScript(plugin_path + 'jquery.slicknav.min.js', function() {
                $('#mobileNav').slicknav({
                    duration: 300,
                    prependTo: '#mobileMenu',
                    duplicate: false,
                    closedSymbol: '&#43;',
                    openedSymbol: '&#8722;'
                });
            });
        }
        $('.mobile-menu-trigger').on("click", function() {
            $('.slicknav_nav').slideToggle(200);
        });
    };

    /*************************
            Slick Nav
    *************************/
    POTENZA.Menutrigger = function() {
        $('.mobile-menu-trigger').on("click", function() {
            $(this).toggleClass("slicknav_open");
        });
    };


    /*************************
            Price slider
    *************************/
    POTENZA.priceSlider = function() {
        var priceSlider = jQuery(".price_slider_wrapper");
        if (priceSlider.length > 0) {
            loadScript(plugin_path + 'jquery-ui.min.js', function() {
                $("#price-slider").slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [15, 150],
                    slide: function(event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#price-slider").slider("values", 0) +
                    " - $" + $("#price-slider").slider("values", 1));

                $("#price-slider1").slider({
                    range: true,
                    min: 0,
                    max: 500,
                    values: [15, 150],
                    slide: function(event, ui) {
                        $("#amount1").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount1").val("$" + $(" #price-slider1").slider("values", 0) +
                    " - $" + $("#price-slider1").slider("values", 1));
            });
        }
    };


    /*************************
            Sticky Header
    *************************/
    POTENZA.isSticky = function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.site-header').addClass('is-sticky');
            } else {
                $('.site-header').removeClass('is-sticky');
            }
        });
    };

    /*************************
            Sticky Cart
    *************************/
    POTENZA.stickyCart = function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.ciyastore-sticky-btn').addClass('sticky');
            } else {
                $('.ciyastore-sticky-btn').removeClass('sticky');
            }
        });
    };

    /*************************
             Countdown
    *************************/
    POTENZA.countdownTimer = function() {
        if ($countdownTimer.exists()) {
            loadScript(plugin_path + 'jquery.downCount.min.js', function() {
                $countdownTimer.downCount({
                    date: '10/01/2020 12:00:00', // Month/Date/Year HH:MM:SS
                    offset: -4
                });
            });
        }
    }

    /*************************
           Select2
    *************************/
    POTENZA.select2 = function() {
        var select2 = jQuery(".select2");
        if (select2.length > 0) {
            loadScript(plugin_path + 'select2.full.min.js', function() {
                $('.search_form-category').select2();
                $('.select2').select2();
            });
        }
    }

    /*************************
        Hidden Sidebar
*************************/
    POTENZA.hiddenSidebar = function() {
        $('.ciyastore-show-shop-btn').on("click", function(e) {
            $('.shop-off_canvas_sidebar').addClass('sidebar-open');
            $('.shop-sidebar-widgets-overlay').addClass('overlay-show');
            e.stopPropagation()
        });
        $('.close-sidebar-widget').on("click", function(e) {
            $('.shop-off_canvas_sidebar').removeClass('sidebar-open');
            $('.shop-sidebar-widgets-overlay').removeClass('overlay-show');
            e.stopPropagation()
        });
        $('.shop-off_canvas_sidebar').on("click", function(e) {
            e.stopPropagation()
        });
        $(document).on("click", function() {
            $('.shop-off_canvas_sidebar').removeClass('sidebar-open');
            $('.shop-sidebar-widgets-overlay').removeClass('overlay-show');
        });
    };
    /*************************
           owl carousel
    *************************/
    POTENZA.carousel = function() {
        var owlslider = jQuery("div.owl-carousel");
        if (owlslider.length > 0) {
            loadScript(plugin_path + 'owl.carousel.min.js', function() {
                owlslider.each(function() {
                    var $this = $(this),
                        $items = ($this.data('items')) ? $this.data('items') : 1,
                        $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
                        $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
                        $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
                        $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
                        $autospeed = ($this.attr('data-autospeed')) ? $this.data('autospeed') : 5000,
                        $smartspeed = ($this.attr('data-smartspeed')) ? $this.data('smartspeed') : 1000,
                        $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
                        $space = ($this.attr('data-space')) ? $this.data('space') : 30;
                    $(this).owlCarousel({
                        loop: $loop,
                        items: $items,
                        responsive: {
                            0: { items: $this.data('xx-items') ? $this.data('xx-items') : 1 },
                            480: { items: $this.data('xs-items') ? $this.data('xs-items') : 1 },
                            768: { items: $this.data('sm-items') ? $this.data('sm-items') : 2 },
                            991: { items: $this.data('md-items') ? $this.data('md-items') : 3 },
                            1200: { items: $this.data('lg-items') ? $this.data('lg-items') : 4 },
                            1400: { items: $items }
                        },
                        dots: $navdots,
                        autoplayTimeout: $autospeed,
                        smartSpeed: $smartspeed,
                        autoHeight: $autohgt,
                        margin: $space,
                        nav: $navarrow,
                        navText: ["<i class='fa fa-angle-left fa-2x'></i>", "<i class='fa fa-angle-right fa-2x'></i>"],
                        autoplay: $autoplay,
                        autoplayHoverPause: true
                    });
                });
            });
        }

    }

    /*************************
            Slick slider
    *************************/
    POTENZA.slickSlider = function() {
            var slickSlider = jQuery("div.slick-carousel");
            if (slickSlider.length > 0) {
                loadScript(plugin_path + 'slick.min.js', function() {
                    $('.slick-slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        fade: false,
                        asNavFor: '.slick-slider-nav'
                    });
                    $('.slick-slider-nav').slick({
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        asNavFor: '.slick-slider',
                        dots: false,
                        arrows: true,
                        focusOnSelect: true
                    });
                    // Testimonial
                    $('.testimonial-slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        fade: false,
                        asNavFor: '.testimonial-nav'
                    });
                    $('.testimonial-nav').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        asNavFor: '.testimonial-slider',
                        dots: false,
                        arrows: true,
                        centerMode: true,
                        centerPadding: '66px',
                        focusOnSelect: true,
                    });
                });
            }
        }
        /*************************
     Back to top
*************************/
    POTENZA.goToTop = function() {
        var $goToTop = $('#back-to-top');
        $goToTop.hide();
        $window.scroll(function() {
            if ($window.scrollTop() > 100) $goToTop.fadeIn();
            else $goToTop.fadeOut();
        });
        $goToTop.on("click", function() {
            $('body,html').animate({ scrollTop: 0 }, 1000);
            return false;
        });
    }

    /*************************
       Megnific Pop
*************************/
    POTENZA.megnificPopup = function() {
            var megnific = jQuery(".megnific");
            if (megnific.length > 0) {
                loadScript(plugin_path + 'jquery.magnific-popup.min.js', function() {
                    $('#youtube').magnificPopup({
                        disableOn: 700,
                        type: 'iframe',
                        mainClass: 'mfp-fade',
                        removalDelay: 160,
                        preloader: false,

                        fixedContentPos: false
                    });
                    $('.mfp-popup-link').magnificPopup({ type: 'image' });
                    $('.popup-gallery').magnificPopup({
                        delegate: '.popup-link',
                        type: 'image',
                        tLoading: 'Loading image #%curr%...',
                        mainClass: 'mfp-img-mobile',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                        },
                        image: {
                            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

                        }
                    });
                });
            }
        }
        /*************************
                 Filterizr
        *************************/
    POTENZA.Filterizr = function() {
            var filterizer = jQuery(".filtr-container");
            if (filterizer.length > 0) {
                loadScript(plugin_path + 'filterizr.min.js', function() {
                    loadScript(plugin_path + 'jquery.filterizr.min.js', function() {
                        var fltr = $('.filtr-container').filterizr({
                            callbacks: {
                                onFilteringEnd: function() {
                                    $('.filtr-container').css({ 'opacity': '1' });
                                },
                                onFilteringStart: function() {
                                    console.log('start');
                                }
                            }
                        });
                    });
                });
            }
        }
        /*************************
                instagram
        *************************/
    POTENZA.instagramfeed = function() {
        if ($('.instafeed').exists()) {
            loadScript(plugin_path + 'spectragram.min.js', function() {
                jQuery.fn.spectragram.accessData = {
                    accessToken: '6441986712.39e610e.04d86db2af844635bd9df83ad7f4f824'
                }
                $('.medium').spectragram('getUserFeed', {
                    size: 'medium', // Options: big, medium ,small //
                    max: 8, // between 1 to 20 //
                    wrapEachWith: "<div class='col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4'></div>"
                });
                $('.big').spectragram('getUserFeed', {
                    size: 'big', // Options: big, medium ,small //
                    max: 6, // between 1 to 20 //
                    wrapEachWith: "<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6'></div>"
                });
                $('.small').spectragram('getUserFeed', {
                    size: 'small', // Options: big, medium ,small //
                    max: 12, // between 1 to 20 //
                    wrapEachWith: "<div class='col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6'></div>"
                });
                $('.insta-carousel').spectragram('getUserFeed', {
                    size: 'big', // Options: big, medium ,small //
                    max: 12, // between 1 to 20 //
                    wrapEachWith: "<div class='item'></div>"
                });

            });
        }
    };

    /*************************
            masonry
    *************************/
    POTENZA.masonry = function() {
        loadScript(plugin_path + 'masonry.pkgd.min.js', function() {
            setTimeout(function() {
                $('.masonry').masonry({
                    // options
                    itemSelector: '.masonry-item'
                });

            }, 100);
        });
    }

    /*************************
        iframeReload
    *************************/
    POTENZA.iframeReload = function() {
        jQuery('iframe.youtube-img').attr('src', jQuery('iframe.youtube-img').attr('src'));
        $('.nav-link').on('click', function() {
            jQuery('iframe.youtube-img').attr('src', jQuery('iframe.youtube-img').attr('src'));
        });

        $('.product-rating').on('click', function() {
            $('.nav-tabs a[href="#tab-reviews"]').tab('show');
        });
    }


    /*************************
    Add class
*************************/

    $(document).ready(function() {
        var contentdescheight = $('.ciyastore-product-description').outerHeight();
        $('.content-hover-block').css('margin-bottom', -contentdescheight - 12);

        $('.cs-more-btn').on('click', function() {
            $(this).parent('.ciyastore-product-description').removeClass('ciyastore-short-description');
            $(this).parent('.cs-more-btn').hide();
            var contentdescheight = (this).parent('.ciyastore-product-description').outerHeight();

            $('.content-hover-block').css('margin-bottom', -contentdescheight - 12);
        });

    });


    /****************************************************
              javascript
    ****************************************************/
    var _arr = {};

    function loadScript(scriptName, callback) {
        if (!_arr[scriptName]) {
            _arr[scriptName] = true;
            var body = document.getElementsByTagName('body')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = scriptName;
            // then bind the event to the callback function
            // there are several events for cross browser compatibility
            // script.onreadystatechange = callback;
            script.onload = callback;
            // fire the loading
            body.appendChild(script);
        } else if (callback) {
            callback();
        }
    };

    /****************************************************
     POTENZA Window load and functions
****************************************************/
    //Window load functions
    $window.on("load", function() {
        POTENZA.preloader(),
            POTENZA.carousel(),
            POTENZA.isSticky(),
            POTENZA.stickyCart(),
            POTENZA.Filterizr(),
            POTENZA.masonry(),
            POTENZA.iframeReload()
    });
    //Document ready functions
    $document.ready(function() {
        POTENZA.megaMenu()
        POTENZA.slickSlider(),
            POTENZA.countdownTimer(),
            POTENZA.select2(),
            POTENZA.goToTop(),
            POTENZA.slickNav(),
            POTENZA.Menutrigger(),
            POTENZA.megnificPopup(),
            POTENZA.priceSlider(),
            POTENZA.instagramfeed(),
            POTENZA.hiddenSidebar()

    });
})(jQuery);