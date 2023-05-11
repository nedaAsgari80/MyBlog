/* Theme: Niwax - Creative Web Design & Digital Marketing Agency HTML5 Template
Author: Rajesh-Doot	
File Description: Main JS file of the template*/
(function ($) {
    "use strict";

    //wow animation
    new WOW().init();
    //Mobile nav
    var $main_nav = $('#main-nav');
    var $toggle = $('.toggle');
    var defaultOptions = {
        rtl:true,
        position:'right',
        disableAt: false,
        customToggle: $toggle,
        levelSpacing: 10,
        navTitle: 'منوی نیواکس',
        levelTitles: true,
        labelClose: false,
        levelTitleAsBack: true,
        levelOpen: 'expand',
        closeOnClick: true,
        insertClose: true,
        closeActiveLevel: true,
        insertBack: true
    };
    // Nav call plugin
    var Nav = $main_nav.hcOffcanvasNav(defaultOptions);

    //Sticky Header
    function updateScroll() {
        if ($(window).scrollTop() >= 80) {
            $(".navfix").addClass('sticky');
        } else {
            $(".navfix").removeClass("sticky");
        }
    }

    $(function () {
        $(window).scroll(updateScroll);
        updateScroll();
    });

    //Header mega menu
    var $nav = $('li.sbmenu');
    $nav.hover(
        function () {
            $(this).addClass('hover');
        },
        function () {
            $(this).removeClass('hover');
        }
    );

    //Video magnificPopup
    $('.video-link').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
    });


    //Owl-Carousel - Home hero card
    var owl = $('.service-card-prb');
    owl.owlCarousel({
        rtl:true,
        items: 4,
        loop: true,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel - Home testimonial
    var owl = $('.testimonial-card-a');
    owl.owlCarousel({
        rtl:true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            },
            1400: {
                items: 1
            }
        }
    });

    //Owl-Carousel - video testimonial
    var owl = $('.video-testimonials');
    owl.owlCarousel({
        rtl:true,
        items: 2,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 3500,
        smartSpeed: 1500,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1024: {
                items: 2
            },
            1400: {
                items: 2
            }
        }
    });

    //Owl-Carousel - case-study
    var owl = $('.project-screens');
    owl.owlCarousel({
        rtl:true,
        items: 4,
        loop: true,
        autoplay: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1
            },
            520: {
                items: 2
            },
            768: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            },
        }
    });

    //Owl-Carousel -portfolio slide
    var owl = $('.porto-slide');
    owl.owlCarousel({
        rtl:true,
        items: 1,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: true,
        stagePadding: 50,
        autoplayTimeout: 350000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0
            },
            520: {
                items: 1,
                stagePadding: 0
            },
            768: {
                items: 1,
                stagePadding: 0
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel -single slide
    var owl = $('.single-slide');
    owl.owlCarousel({
        rtl:true,
        items: 1,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: true,
        stagePadding: 100,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0
            },
            520: {
                items: 1,
                stagePadding: 0
            },
            768: {
                items: 1,
                stagePadding: 0
            },
            1200: {
                items: 1
            },
            1400: {
                items: 1
            },
            1600: {
                items: 1
            },
        }
    });

    //Owl-Carousel - app page bages-slider
    var owl = $('.bages-slider');
    owl.owlCarousel({
        rtl:true,
        items: 4,
        loop: true,
        autoplay: true,
        centre: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 2
            },
            520: {
                items: 3
            },
            768: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            },
            1600: {
                items: 4
            },
        }
    });

    //Owl-Carousel - app page bages-slider
    var owl = $('.logo-weworkfor');
    owl.owlCarousel({
        rtl:true,
        items: 4,
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplayTimeout: 1800,
        autoplayHoverPause: false,
        smartSpeed: 2000,
        responsive: {
            0: {
                items: 3
            },
            520: {
                items: 3
            },
            768: {
                items: 4
            },
            1200: {
                items: 4
            },
            1400: {
                items: 5
            },
            1600: {
                items: 6
            },
        }
    });

    //  //Owl-Carousel - Home testimonial
    var owl = $('.testimonial-card-b');
    owl.owlCarousel({
        rtl:true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        dots: true,
        dotsContainer: "#testimonials-avatar",
        smartSpeed: 500,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1024: {
                items: 1
            },
            1400: {
                items: 1
            }
        }
    });


    //full card portfolio
    var owl = $('.zoomowl');
    owl.owlCarousel({
        rtl:true,
        stagePadding: 200,
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 60
            },
            600: {
                items: 1,
                stagePadding: 100
            },
            1000: {
                items: 1,
                stagePadding: 200
            },
            1200: {
                items: 1,
                stagePadding: 250
            },
            1400: {
                items: 1,
                stagePadding: 300
            },
            1600: {
                items: 1,
                stagePadding: 350
            },
            1800: {
                items: 1,
                stagePadding: 400
            }
        }
    });

    //Counter Up	
    $(".counter").counterUp({
        delay: 10,
        time: 2500,
    });

    //Scroll to top
    $.scrollUp({
        animation: 'fade',
        scrollImg: {
            active: true,
            type: 'background'
        }
    });

    //Portfolio Filter		
    $('.card-list').imagesLoaded(function () {
        // init Isotope
        var $grid = $('.card-list').isotope({
            isOriginLeft: false,
            itemSelector: '.single-card-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-sizer'
            }
        });
        // filter items on button click
        $('.filter-menu').on('click', 'li', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                isOriginLeft: false,
                filter: filterValue
            });
        });
    });
    //for menu active class
    $('.filter-menu li').on('click', function (event) {
        $(this).siblings('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
        event.preventDefault();
    });


    // background image
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })


    gdprCookieNoticeLocales.fa = {
        description: "ما از کوکی‌ها استفاده می‌کنیم تا تجربه مرور بهتری به شما ارائه دهیم، محتوا و تبلیغات را شخصی‌سازی کنیم، ویژگی‌های رسانه‌های اجتماعی را ارائه دهیم و ترافیک خود را تجزیه و تحلیل کنیم. درباره نحوه استفاده ما از کوکی ها و نحوه کنترل آنها با کلیک روی تنظیمات کوکی بخوانید. در صورت ادامه استفاده از این وب سایت، با کوکی های ما موافقت می کنید.",
        settings: "تنظیمات کوکی",
        accept: "پذیرش کوکی ها",
        statement: "بیانیه کوکی ما",
        save: "تنظیمات را ذخیره کن",
        always_on: "همیشه روشن",
        cookie_essential_title: "کوکی های ضروری وب سایت",
        cookie_essential_desc: "کوکی‌های ضروری با فعال کردن عملکردهای اساسی مانند پیمایش صفحه و دسترسی به مناطق امن وب‌سایت، به قابل استفاده کردن یک وب‌سایت کمک می‌کنند. وب سایت بدون این کوکی ها نمی تواند به درستی کار کند.",
        cookie_performance_title: "کوکی های عملکرد",
        cookie_performance_desc: "این کوکی ها برای بهبود عملکرد و عملکرد وب سایت های ما استفاده می شوند اما برای استفاده از آنها ضروری نیستند. به عنوان مثال زبان دلخواه شما یا منطقه ای را که در آن هستید ذخیره می کند.",
        cookie_analytics_title: "کوکی های تجزیه و تحلیل",
        cookie_analytics_desc: "ما از کوکی‌های تحلیلی استفاده می‌کنیم تا به ما کمک کند نحوه تعامل کاربران با محتوای وب‌سایت را اندازه‌گیری کنیم، که به ما کمک می‌کند وب‌سایت‌ها و برنامه‌هایمان را برای شما سفارشی کنیم تا تجربه شما را افزایش دهیم.",
        cookie_marketing_title: "کوکی های بازاریابی",
        cookie_marketing_desc: "این کوکی‌ها برای مرتبط‌تر کردن پیام‌های تبلیغاتی به شما و علایق شما استفاده می‌شوند. هدف نمایش تبلیغاتی است که برای هر کاربر مرتبط و جذاب باشد و در نتیجه برای ناشران و تبلیغ کنندگان شخص ثالث ارزشمندتر باشد."
    };

    //end of page
})(jQuery);
  
  