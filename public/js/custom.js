/* Global variables */
"use strict";

var $document = $(document),
    $window = $(window),
    plugins = {
        mainSlider: $('#slider'),
        carouselServices: $('.swiper-container-services'),
        carouselModels: $('.swiper-container-models'),
        carouselColumn: $('.swiper-container-column-first'),
        carouselColumnSecond: $('.swiper-container-column-second'),
        carouselBlockquote: $('.swiper-container-blockquote'),
        carouselPostList: $('.swiper-container-slider-format'),
        blogListCarousel: $('.swiper-container-blog'),
        googleMapFooter: $('#footer-map'),
        contactsMapFooter: $('#contacts-map'),
        contactsMapFooterMain: $('#contacts-map-main'),
        effectMoveBlock: $('.move_img'),
        wowEfects: $('.wow'),
        isotopeGallery: $('.gallery-isotope'),
        postGallery: $('.post-list-masonry'),
        gallery: $('#gallery'),
        backToTop: $('.scrollup'),
        stickup: $('.stickUp'),
        telInput: $('.phone'),
        sliderdetails: $('#lightSlider'),
        reserveform: $('.order-details-form'),
        sliderprice: $('.price-slider'),
        contactForm: $('#contactform'),
        bookingForm: $('#bookingForm'),
        ttInputDate: $('.tt-input-date'),
        carouselBrands: $('.swiper-container-brands'),
        ttMobileTopBox: $('#tt-mobile-top-box'),
        steps: $('#example-advanced-form')
    };
var descwidth = window.innerWidth;
var globalReservationObject = {};
/* Initialize All Scripts */
$document.ready(function () {


    if (plugins.steps.length) {
        //$.amaran({content:{'message':'My first example!'}});
        var form = $("#example-advanced-form").show();

        var $bookingForm = $("#example-advanced-form");
        var carInput = document.getElementById('carInput');

            global_car = JSON.parse(carInput.value);



        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                time: 'icon icon-clock',
                date: 'icon icon-calendar-with-a-clock-time-tools',
                up: 'icon icon-arrow-down-sign-to-navigate3',
                down: 'icon icon-arrow-down-sign-to-navigate',
                previous: 'icon icon-arrow-up-sign-to-navigate2',
                next: 'icon icon-arrow-down-sign-to-navigate2',
                today: 'icon icon-today',
                clear: 'icon icon-remove-symbol',
                close: 'icon icon-remove-symbol'
            }
        });

        $('#setDateBtn').on('click', function () {
            var day = $("#selectPrevDay option:selected").val(),
                month = $("#selectPrevMonth option:selected").val(),
                time = $("#selectPrevTime option:selected").val(),
                location = $("#selectPrevLocation option:selected").val();
            $('#datetimepicker1').data("DateTimePicker").date(day + '/' + month + '/2018');
            $('#timepicker1').data("DateTimePicker").date(time);
            $('#location1').val(location);
        });

        if ($('.timepicker', $bookingForm).length) {
            $('.timepicker', $bookingForm).datetimepicker({
                format: 'HH:mm',
                icons: {
                    time: 'icon icon-clock',
                    up: 'icon icon-arrow-up-sign-to-navigate',
                    down: 'icon icon-arrow-down-sign-to-navigate',
                    previous: 'icon icon-arrow-down-sign-to-navigate22',
                    next: 'icon icon-arrow-down-sign-to-navigate2'
                }
            });
        }

        form.steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            enableAllSteps: "true",
            onStepChanging: function (event, currentIndex, newIndex) {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex) {
                    return true;
                }

                if(currentIndex === 1){
                    if(global_car===undefined || global_car===0 ){
                        $.amaran({
                            'inEffect'  :'slideRight',
                            'position'  :'top right',
                            'content':{
                                bgcolor:'#0096be',
                                color:'#fff',
                                delay:'3000',
                                message:'Please select a car before going to next step!',
                                icon:'fa fa-download',
                                sticky:'true'
                            },
                            theme:'colorful'

                        });
                        return false;
                    }

                }

                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex) {
                    // To remove error styles
                    form.find(".body:eq(" + newIndex + ") label.error").remove();
                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }

                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                if(currentIndex === 0){

                }
                if(currentIndex === 1){
                    if(typeof(global_car) == "object")
                    {
                        console.log(global_car);
                        $.amaran({
                            'inEffect'  :'slideRight',
                            'position'  :'top right',
                            'content':{
                                bgcolor:'#0096be',
                                color:'#fff',
                                message:'Car selected:'+global_car.name+"<br>Select new car if you change your mind",
                                icon:'fa fa-download',
                            },
                            delay:'10000',
                            sticky:'true',
                            theme:'colorful'
                        });
                        var gallery = document.querySelectorAll('#gallery > .gallery__item');
                        gallery[global_car.id-1].className += " gallery__item__hover";
                    }

                    // if(typeof(global_car) == "object" && global_car.id == 3)
                    // {
                    //     var gallery = document.querySelectorAll('#gallery > .gallery__item');
                    //     gallery[2].children[1].children[3].innerHTML = '<span id="price"><strong>18€</strong>/ day </span>';
                    // }


                }
                if (currentIndex === 3) {
                    var div = document.getElementById('extrasTableDiv');
                    var div2 = document.getElementById('extrasTableDiv2');
                    div.innerHTML = '';
                    div2.innerHTML = '';
                    var reservationObj = getReservationData();
                    var price = calculatePrice();
                    var days = calculateDays();
                    var totalCarPrice = price * days;
                    reservationObj['totalCarPrice'] = totalCarPrice;
                    reservationObj['calculatedPrice'] = price;
                    var priceObj = calculateExtras(reservationObj, days);
                    printExtrasTable(reservationObj, days , priceObj.extrasTotal);
                    var fullPrice = totalCarPrice + priceObj.total;
                    document.getElementById('carName').innerHTML = global_car.name;
                    document.getElementById('carPrice').innerHTML = price + "€";
                    document.getElementById('totalCarPrice').innerHTML = totalCarPrice + "€";
                    document.getElementById('fullPrice').innerHTML = fullPrice  + "€";
                }
            },
            onFinishing: function (event, currentIndex) {
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                var reservationObj = getReservationData();
                var price = calculatePrice();
                var days = calculateDays();
                var priceObj = calculateExtras(reservationObj, days);
                var carPrice = {
                    "carPrice":price,
                    "totalCarPrice": price * days,
                    "totalBookingPrice": price * days + priceObj.total
                };
                //ga('send', 'event', 'booking', 'booiking send');
                var merged = Object.assign(reservationObj, global_car, priceObj.extrasTotal, carPrice);
                $.amaran({
                    'inEffect'  :'slideRight',
                    'position'  :'top right',
                    'content':{
                        bgcolor:'#0096be',
                        color:'#fff',
                        delay:'3000',
                        message:'Your reservation request was submitted! Thank you for using ProAuto!',
                        icon:'fa fa-download',
                        sticky:'true'
                    },
                    theme:'colorful'

                });
                 return $bookingForm.ajaxSubmit({url: '/reservation', type: 'post', data: merged})

                // grecaptcha.ready(function() {
                //     grecaptcha.execute('6Lc_H3wUAAAAAMhZ20K9fkVsCR2yMp94mZAlS6kQ', {action: 'steps'})
                //         .then(function(token) {
                //             //document.getElementById('g-recaptcha-response').value=token;
                //             $.amaran({
                //                 'inEffect'  :'slideRight',
                //                 'position'  :'top right',
                //                 'content':{
                //                     bgcolor:'#0096be',
                //                     color:'#fff',
                //                     delay:'3000',
                //                     message:'Your reservation request was submitted! Thank you for using ProAuto!',
                //                     icon:'fa fa-download',
                //                     sticky:'true'
                //                 },
                //                 theme:'colorful'
                //
                //             });
                //             return $bookingForm.ajaxSubmit({url: '/reservation', type: 'post', data: merged})
                //         });
                // });
            }
        })
    }


    if (plugins.sliderdetails.length) {
        $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            slideMargin: 0,
            thumbItem: 4,
            galleryMargin: 0,
            adaptiveHeight: false,
            thumbMargin: 20
        })
    }

    if (plugins.sliderprice.length) {

        var keypressSlider = document.getElementById('keypress');
        var input0 = document.getElementById('input-with-keypress-0');
        var input1 = document.getElementById('input-with-keypress-1');
        var inputs = [input0, input1];

        noUiSlider.create(keypressSlider, {
            start: [20, 9000],
            connect: true,
            tooltips: [true, wNumb({
                decimals: 1
            })],
            range: {
                'min': [0],
                'max': 10000
            }
        });

        keypressSlider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });


        function setSliderHandle(i, value) {
            var r = [null, null];
            r[i] = value;
            keypressSlider.noUiSlider.set(r);
        }

        // Listen to keydown events on the input field.
        inputs.forEach(function (input, handle) {

            input.addEventListener('change', function () {
                setSliderHandle(handle, this.value);
            });

            input.addEventListener('keydown', function (e) {

                var values = keypressSlider.noUiSlider.get();
                var value = Number(values[handle]);

                // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
                var steps = keypressSlider.noUiSlider.steps();

                // [down, up]
                var step = steps[handle];

                var position;

                // 13 is enter,
                // 38 is key up,
                // 40 is key down.
                switch (e.which) {

                    case 13:
                        setSliderHandle(handle, this.value);
                        break;

                    case 38:

                        // Get step to go increase slider value (up)
                        position = step[1];

                        // false = no step is set
                        if (position === false) {
                            position = 1;
                        }

                        // null = edge of slider
                        if (position !== null) {
                            setSliderHandle(handle, value + position);
                        }

                        break;

                    case 40:

                        position = step[0];

                        if (position === false) {
                            position = 1;
                        }

                        if (position !== null) {
                            setSliderHandle(handle, value - position);
                        }

                        break;
                }
            });
        });


    }


    if (plugins.telInput.length) {
        $(".phone").intlTelInput();
    }

    if (plugins.backToTop.length) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').on("click", function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    }

    // wow effects
    if (plugins.wowEfects.length) {
        new WOW().init();
    }
    // slider
    if (plugins.mainSlider.length) {
        plugins.mainSlider.nivoSlider({
            animSpeed: 700,
            pauseTime: 6000,
            pauseOnHover: false,
            effect: 'boxRainGrow',
            prevText: '',
            nextText: '',
            controlNav: false
        });
    }
    if (plugins.carouselServices.length) {
        var swiper = new Swiper('.swiper-container-services', {
            pagination: '.swiper-pagination-services',
            paginationClickable: true,
            slidesPerView: 3,
            loop: true,
            spaceBetween: 30,
            breakpoints: {
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                992: {
                    slidesPerView: 2,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                1200: {
                    autoplay: 5000,
                    speed: 1000
                }
            }
        });
    }
    if (plugins.carouselBrands.length) {
        var swiper = new Swiper('.swiper-container-brands', {
            pagination: '.swiper-pagination-brands',
            paginationClickable: true,
            slidesPerView: 7,
            spaceBetween: 0,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 8000,
            grabCursor: true,
            speed: 1000,
            loop: true,
            breakpoints: {
                767: {
                    slidesPerView: 3,
                    nextButton: false,
                    prevButton: false,
                    spaceBetween: 0,
                    slidesPerGroup: 3,
                    loopFillGroupWithBlank: true
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 0,
                    slidesPerGroup: 6,
                    loopFillGroupWithBlank: true
                }
            }
        });
    }
    if (plugins.carouselModels.length) {
        var swiper_cars = new Swiper('.swiper-container-models', {
            pagination: '.swiper-pagination-models',
            slidesPerView: 2,
            initialSlide: 1,
            centeredSlides: true,
            paginationClickable: true,
            spaceBetween: 0,
            autoplay: 5000,
            grabCursor: true,
            speed: 1000,
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            breakpoints: {
                992: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });
    }
    if (plugins.carouselColumn.length) {
        var swiper_column = new Swiper('.swiper-container-column-first', {

            slidesPerView: 2,
            slidesPerColumn: 2,
            paginationClickable: true,
            spaceBetween: 0,
            loop: true,
            breakpoints: {
                1200: {
                    slidesPerColumn: 2,
                    slidesPerView: 1,
                    spaceBetween: 0,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                767: {
                    slidesPerView: 2,
                    pagination: '.swiper-pagination-services-second',
                    slidesPerColumn: 1,
                    spaceBetween: 15,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                480: {
                    slidesPerView: 1,
                    slidesPerColumn: 1,
                    pagination: '.swiper-pagination-services-second',
                    spaceBetween: 15,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                }
            }
        });
    }
    if (plugins.carouselColumnSecond.length) {
        var swiper_column = new Swiper('.swiper-container-column-second', {
            pagination: '.swiper-pagination-column-main',
            slidesPerView: 2,
            slidesPerColumn: 3,
            paginationClickable: true,
            spaceBetween: 0,
            breakpoints: {
                1200: {
                    slidesPerColumn: 1,
                    spaceBetween: 50,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                768: {
                    slidesPerView: 2,
                    slidesPerColumn: 1,
                    spaceBetween: 15,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                },
                480: {
                    slidesPerView: 1,
                    slidesPerColumn: 1,
                    spaceBetween: 15,
                    autoplay: 5000,
                    grabCursor: true,
                    speed: 1000
                }

            }
        });
    }
    if (plugins.carouselBlockquote.length) {
        var swiper_blockquote = new Swiper('.swiper-container-blockquote', {
            pagination: '.swiper-pagination-blockquote',
            slidesPerView: 2,
            paginationClickable: true,
            spaceBetween: 30,
            autoplay: 5000,
            speed: 1000,
            nextButton: '.swiper-button-next1',
            prevButton: '.swiper-button-prev1',
            breakpoints: {
                992: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    }
    if (plugins.carouselPostList.length) {
        var swiper_blockquote = new Swiper('.swiper-container-slider-format', {
            pagination: '.swiper-pagination-slider-format',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 0,
            speed: 1000,
            nextButton: '.swiper-button-next-blog',
            prevButton: '.swiper-button-prev-blog',
        });
    }
    if (plugins.blogListCarousel.length) {
        var swiper_blog_carousel = new Swiper('.swiper-container-blog', {
            pagination: '.swiper-pagination-blog',
            slidesPerView: 3,
            paginationClickable: true,
            spaceBetween: 20,
            autoplay: 6000,
            speed: 1000,
            autoHeight: true,
            nextButton: '.swiper-button-next2',
            prevButton: '.swiper-button-prev2',
            breakpoints: {
                992: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    }

    if (plugins.stickup.length) {
        jQuery(function ($) {
            $(document).ready(function () {
                //enabling stickUp on the '.navbar-wrapper' class
                $('.stickUp').stickUp();
            });
        });
    }
    if (plugins.reserveform.length) {
        $(document).ready(function () {
            var max_fields = 3; //maximum input boxes allowed
            var wrapper = $(".stop-location"); //Fields wrapper
            var add_button = $(".add"); //Add button ID
            var x = 0; //initlal text box count

            $(wrapper).on("click", ".add", function (e) {
                e.preventDefault();
                x++;
                if (x <= max_fields) {
                    $(wrapper).append('<div class="stop-location-new"><a href="#" class="remove_field"><i>-</i> <span>Remove</span></a><input type="text" name="stoplocation' + x + '" placeholder="Add stop"/></div>'); //add input box
                }
                if (x == max_fields) {
                    add_button.hide()
                } else {
                    add_button.show();
                }
            });
            $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
                if (x == max_fields) {
                    add_button.hide()
                } else {
                    add_button.show();
                }
            });
        });
    }

    if (plugins.isotopeGallery.length) {
        var $gallery = plugins.isotopeGallery;

        $gallery.isotope({
            itemSelector: '.gallery__item',
            masonry: {
                columnWidth: '.gallery__item:not(.doubleW)'
            }
        });
        isotopeFilters($gallery);
    }

    // Post Isotope
    if (plugins.postGallery.length) {
        var $postgallery = plugins.postGallery;
        $postgallery.isotope({
            itemSelector: '.post-list-masonry__item',
            masonry: {
                columnWidth: '.post-list-masonry__item:not(.doubleW)'
            }
        });
    }

    // Isotope Filters (for gallery)
    function isotopeFilters(gallery) {
        var gallery = $(gallery);
        if (gallery.length) {
            var container = gallery;
            var optionSets = $(".filters-by-category .option-set"),
                optionLinks = optionSets.find("a");
            optionLinks.on('click', function (e) {
                var thisLink = $(this);
                if (thisLink.hasClass("selected")) return false;
                var optionSet = thisLink.parents(".option-set");
                optionSet.find(".selected").removeClass("selected");
                thisLink.addClass("selected");
                var options = {},
                    key = optionSet.attr("data-option-key"),
                    value = thisLink.attr("data-option-value");
                value = value === "false" ? false : value;
                options[key] = value;
                if (key === "layoutMode" && typeof changeLayoutMode === "function") changeLayoutMode($this, options);
                else {
                    container.isotope(options);
                }
                return false
            })
        }
    }

    // Contact page form
    if (plugins.contactForm.length) {
        var $contactform = plugins.contactForm;
        $contactform.validate({
            showErrors: function(errorMap, errorList) {
                // Do nothing here
            },
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                message: {
                    required: true,
                    minlength: 20
                },
                email: {
                    required: true,
                    email: true
                }

            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must consist of at least 2 characters"
                },
                message: {
                    required: "Please enter message",
                    minlength: "Your message must consist of at least 20 characters"
                },
                email: {
                    required: "Please enter your email"
                }
            },
            submitHandler: function (form) {
                /*grecaptcha.ready(function() {
                    grecaptcha.execute('6Lc_H3wUAAAAAMhZ20K9fkVsCR2yMp94mZAlS6kQ', {action: 'contact'})
                        .then(function(token) {
                            console.log(token);
                            //document.getElementById('g-recaptcha-response').value=token;
                            $(form).ajaxSubmit({
                                type: "POST",
                                data: $(form).serialize()+ "&g-recaptcha-response=" + token,
                                url: "send-mail",
                                success: function () {
                                    $('#success').fadeIn();
                                    $('#contactform').each(function () {
                                        this.reset();
                                    });
                                },
                                error: function () {
                                    $('#contactform').fadeTo("slow", 0, function () {
                                        $('#error').fadeIn();
                                    });
                                }
                            });
                        });
                });*/
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serialize(),
                    url: "send-mail",
                    success: function () {
                        $('#success').fadeIn();
                        $('#contactform').each(function () {
                            this.reset();
                        });
                    },
                    error: function () {
                        $('#contactform').fadeTo("slow", 0, function () {
                            $('#error').fadeIn();
                        });
                    }
                });
            }
        });
    }

    // Booking form
    if (plugins.bookingForm.length) {
        var $bookingForm = plugins.bookingForm;
        // datepicker
        if ($('.datetimepicker', $bookingForm).length) {
            $('.datetimepicker', $bookingForm).datetimepicker({
                format: 'DD/MM/YYYY',
                icons: {
                    time: 'icon icon-clock',
                    date: 'icon icon-calendar-with-a-clock-time-tools',
                    up: 'icon icon-arrow-down-sign-to-navigate3',
                    down: 'icon icon-arrow-down-sign-to-navigate',
                    previous: 'icon icon-arrow-up-sign-to-navigate2',
                    next: 'icon icon-arrow-down-sign-to-navigate2',
                    today: 'icon icon-today',
                    clear: 'icon icon-remove-symbol',
                    close: 'icon icon-remove-symbol'
                }
            });
        }
        $('#setDateBtn').on('click', function () {
            var day = $("#selectPrevDay option:selected").val(),
                month = $("#selectPrevMonth option:selected").val(),
                time = $("#selectPrevTime option:selected").val(),
                location = $("#selectPrevLocation option:selected").val();
            $('#datetimepicker1').data("DateTimePicker").date(day + '/' + month + '/2018');
            $('#timepicker1').data("DateTimePicker").date(time);
            $('#location1').val(location);
        })

        if ($('.timepicker', $bookingForm).length) {
            $('.timepicker', $bookingForm).datetimepicker({
                format: 'HH:mm',
                icons: {
                    time: 'icon icon-clock',
                    up: 'icon icon-arrow-up-sign-to-navigate',
                    down: 'icon icon-arrow-down-sign-to-navigate',
                    previous: 'icon icon-arrow-down-sign-to-navigate22',
                    next: 'icon icon-arrow-down-sign-to-navigate2'
                }
            });
        }
        $bookingForm.validate({
            rules: {
                firstname: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                }

            },
            messages: {
                firstname: {
                    required: "Please enter your name",
                    minlength: "Your name must consist of at least 2 characters"
                },
                email: {
                    required: "Please enter your email"
                }
            }, submitHandler: function (form) {
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serialize(),
                    url: "reservation",
                    success: function () {
                        $('#successBooking').fadeIn();
                        // $('#bookingForm').each(function () {
                        // 	this.reset();
                        // });
                    },
                    error: function () {
                        $('#errorBooking').fadeIn();
                    }
                });
            }
        });
    }

});

$window.on('load', function () {
    $('#checkbox-03').change(function () {
        if($(this).is(':checked')){
            document.getElementById("location2").disabled = true;
        } else {
            document.getElementById("location2").disabled = false;
        }
    });
    if (plugins.steps.length) {
        var form = $("#example-advanced-form").show();


        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                time: 'icon icon-clock',
                date: 'icon icon-calendar-with-a-clock-time-tools',
                up: 'icon icon-arrow-down-sign-to-navigate3',
                down: 'icon icon-arrow-down-sign-to-navigate',
                previous: 'icon icon-arrow-up-sign-to-navigate2',
                next: 'icon icon-arrow-down-sign-to-navigate2',
                today: 'icon icon-today',
                clear: 'icon icon-remove-symbol',
                close: 'icon icon-remove-symbol'
            }
        });

        // $('#setDateBtn').on('click', function () {
        //     var day = $("#selectPrevDay option:selected").val(),
        //         month = $("#selectPrevMonth option:selected").val(),
        //         time = $("#selectPrevTime option:selected").val(),
        //         location = $("#selectPrevLocation option:selected").val();
        //     $('#datetimepicker1').data("DateTimePicker").date(day + '/' + month + '/2018');
        //     $('#timepicker1').data("DateTimePicker").date(time);
        //     $('#location1').val(location);
        // });


        $('.timepicker').datetimepicker({
            format: 'HH:mm',
            icons: {
                time: 'icon icon-clock',
                up: 'icon icon-arrow-up-sign-to-navigate',
                down: 'icon icon-arrow-down-sign-to-navigate',
                previous: 'icon icon-arrow-down-sign-to-navigate22',
                next: 'icon icon-arrow-down-sign-to-navigate2'
            }
        });
    }

    $('.containerTest').removeClass('order-details-form');
    setTimeout(function () {
        $('.plash').fadeOut(500);
    }, 500);

    function createMap(id, mapZoom) {
        // Create google map
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: mapZoom,
            scrollwheel: false, // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.59244777, -74.08844948),
            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ececec"
                }, {
                    "lightness": 17
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f6f6f6"
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
            }]
        };
        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById(id);
        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
        var image = '/images/map-marker.png';
        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.59244777, -74.08844948),
            map: map,
            icon: image
        });

    }

    if (plugins.googleMapFooter.length) {
        //createMap('footer-map', 14)
    }
    if (plugins.contactsMapFooter.length) {
        //createMap('contacts-map', 14)
    }
    if (plugins.contactsMapFooterMain.length) {
        //createMap('contacts-map-main', 14)
    }
});


function a() {
    this.classList.toggle('opened');
}
document.querySelector('.navbar-toggle').addEventListener('click', a);

var descwidth = window.innerWidth;
function getInternetExplorerVersion() {
    var rv = -1;
    if (navigator.appName == 'Microsoft Internet Explorer') {
        var ua = navigator.userAgent;
        var re = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
            rv = parseFloat(RegExp.$1);
    } else if (navigator.appName == 'Netscape') {
        var ua = navigator.userAgent;
        var re = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
            rv = parseFloat(RegExp.$1);
    }
    return rv;
}
if (getInternetExplorerVersion() !== -1) {
    $("html").addClass("ie");
}

var cssFix = function () {
    var u = navigator.userAgent.toLowerCase(),
        is = function (t) {
            return (u.indexOf(t) != -1)
        };
    $("html").addClass([
        (!(/opera|webtv/i.test(u)) && /msie (\d)/.test(u)) ? ('ie ie' + RegExp.$1) :
            is('firefox/2') ? 'gecko ff2' :
                is('firefox/3') ? 'gecko ff3' :
                    is('gecko/') ? 'gecko' :
                        is('opera/9') ? 'opera opera9' : /opera (\d)/.test(u) ? 'opera opera' + RegExp.$1 :
                            is('konqueror') ? 'konqueror' :
                                is('applewebkit/') ? 'webkit safari' :
                                    is('mozilla/') ? 'gecko' : '',
        (is('x11') || is('linux')) ? ' linux' :
            is('mac') ? ' mac' :
                is('win') ? ' win' : ''
    ].join(''));
}();

// Mobile Slide Info
function mobileHeaderSlider(button) {
    var button = button;
    $(button).on('click', function () {
        var $topline = $('#tt-mobile-top-box'),
            $this = $(this),
            $slide = $('.' + $this.data('target'));
        if (!$this.hasClass('active')) {
            $(button).removeClass('active');
            $this.toggleClass('active');
            $topline.addClass('active');
            $('.tt-toggle-tab').not('.' + $this.data('target')).removeClass('opened');
            $slide.addClass('opened');
        } else {
            $this.removeClass('active');
            $topline.removeClass('active');
            $('.tt-toggle-tab').removeClass('opened');
        }
    })
}
mobileHeaderSlider('[data-target]');

jQuery(document).ready(function ($) {
    var
        $window = $(window),
        $target = $(".mobile-top-panel__fixed"),
        $fixed = $target.offset().top;
    $window.on('scroll', function () {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > $fixed && $window.innerWidth() < 992) {
            $target.addClass("sticky");
            $('.mobile-top-panel').addClass('active');
        } else {
            $target.removeClass("sticky");
            $('.mobile-top-panel').removeClass('active');
        }
    });
});
$('.menu-open').click(function () {
    $('.mobile-top-panel__fixed .menu-navigation').toggleClass('menu-navigation-active').fadeIn();
});
$('.btn-close-menu').click(function () {
    $('.mobile-top-panel__fixed .menu-navigation').removeClass('menu-navigation-active').fadeOut();
});
if ($(window).innerWidth() < 768) {
    $('.site-footer .box-elements h5, .site-footer .box-elements .contact-info').click(function () {
        $(this).toggleClass('open-footer-list');
        $(this).parent().find('.footer-list').toggleClass('footer-list-open');
        $(this).parent().find('.location_info').toggleClass('location_info-open');
    });
}


datePicker('.datepicker:not(.datepicker-month)');
datePickerM('.datepicker-month');
toggleReview('.js-toggle-reviewform', '.js-review-form-wrap');
// DatePicker
function datePicker(datepicker) {
    $(datepicker).datepicker({
        dateFormat: "dd-mm-yy",
        showAnim: false,
        numberOfMonths: 1,
        showOtherMonths: true,
        beforeShow: function () {
            if (!$('.datepicker-wrapper').length) {
                $('#ui-datepicker-div').wrap('<span class="datepicker-wrapper"></span>');
                $('.dropdown.show').addClass('keep-open');
            }
        }
    });
    $(document).on('hide.bs.dropdown', function (e) {
        if ($('#ui-datepicker-div').is(':visible')) {
            return false;
        }
    });
}
function datePickerM(datepicker) {
    $(datepicker).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        beforeShow: function () {
            $('#ui-datepicker-div').wrap('<span class="datepicker-wrapper datepicker-onlymonth"></span>');
        },
        onClose: function (dateText, inst) {
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
}

function toggleReview(link, review) {
    var $review = $(review);
    $(link).on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('opened');
        $review.css({'height': $review[0].scrollHeight}).toggleClass('opened');
    })
}
function extractHostname(url) {
    var hostname;
    //find & remove protocol (http, ftp, etc.) and get hostname

    if (url.indexOf("://") > -1) {
        hostname = url.split('/')[2];
    }
    else {
        hostname = url.split('/')[0];
    }

    //find & remove port number
    hostname = hostname.split(':')[0];
    //find & remove "?"
    hostname = hostname.split('?')[0];

    return hostname;
}

function sendCar(car) {
    //var hostname = extractHostname(window.location.href);
    window.location.replace("/steps/"+car.id);
}

var global_car;


function carSelect(car) {
    global_car = car;
    var form = $("#example-advanced-form");

    form.steps("next");
}

function getReservationData() {
    var formData = JSON.parse(JSON.stringify($("#example-advanced-form").serializeArray()));
    var test = $("#example-advanced-form").serializeArray();
    var reservationObj = {};
    for( var i =0; i < formData.length; i++){
        reservationObj[formData[i].name] = formData[i].value;
    }
    return reservationObj;

}
function timeReservation() {
    var reservationObj = getReservationData();

    moment().format();
    var now = reservationObj.date + " " + reservationObj.time;
    var then = reservationObj.date1 + " " + reservationObj.time1;


    var ms = moment(then, "DD/MM/YYYY HH:mm:ss").diff(moment(now, "DD/MM/YYYY HH:mm:ss"));
    var d = moment.duration(ms);
    var s = Math.floor(d.asHours()) + moment.utc(ms).format(":mm:ss");
    return d._data;
}

function calculatePrice() {
    //calculate time difference
    var timeDiff = {};
    timeDiff = timeReservation();
    //callculate price
    var price = 0;
    if (timeDiff.days <= 3) {
        price = global_car.price_3;
    }
    else if (timeDiff.days <= 6)
        price = global_car.price_6;
    else if (timeDiff.days > 6)
        price = global_car.price_14;
    return price;
}

function calculateDays() {
    var timeDiff = {};
    timeDiff = timeReservation();
    var numberOfDays = 0;
    numberOfDays = timeDiff.days;

    if (timeDiff.hours > 0 || timeDiff.minutes > 0) {
        numberOfDays++;
    }

    return numberOfDays;
}

function printExtrasTable(reservationObj, days, extrasTotal) {
    var reservationInfo =
                "<div class='col-sm-12'>" +
                    "<div class='text-block'>"+
                        "<p>"+
                           " <span class='text-link'>"+
                                "Booking info"+
                            "</span>"+
                        "</p>"+
                        "<ul class='list__marker'>"+
                            "<li>"+
                                " Staring location: "+reservationObj.location1+
                            "</li>"+
                            "<li>"+
                                " Drop-Off location: "+reservationObj.location2+
                            "</li>"+
                            "<li>"+
                                " Pick up time: "+reservationObj.date+" "+reservationObj.time+
                            "</li>"+
                            "<li>"+
                                " Drop-Off time: "+reservationObj.date1+" "+reservationObj.time1+
                            "</li>"+
                            "<li>"+
                                " Passenger's name: "+reservationObj.firstname+
                            "</li>"+
                            "<li>"+
                                " Passenger's email: "+reservationObj.email+
                            "</li>";

                    reservationObj.flightNumber ?
                        reservationInfo +=
                            "<li>"+
                                " Flight number: "+reservationObj.flightNumber+
                            "</li>"
                             : "";

                    reservationObj.phone ?
                        reservationInfo +=
                            "<li>"+
                            " Phone number: "+reservationObj.phone+
                            "</li>"
                        : "";

                    reservationObj.specialreguests ?
                        reservationInfo +=
                            "<li>"+
                            " Special request: "+reservationObj.specialreguests+
                            "</li>"
                        : "";

                        reservationObj.pickupLocation ?
                            reservationInfo +=
                                "<li>"+
                                " Return car to same location"+"&nbsp<i class='icon-correct-signal'></i>"+
                                "</li>"
                            : "";


    reservationInfo +=
                        "</ul>"+
                    "</div>"+
                "</div>";


    /*""+
    ""+
    ""+*/

    var extrasTable =
			"<table class='price-table' id='extrasTable'>"+
				"<tbody>"+
				"<tr class='price-table__title'>"+
					"<td class='classification'>Car selected:</td>"+
					"<td>Price per Day</td>"+
					"<td>Full car price</td>"+
				"</tr>"+
				"<tr>"+
					"<td id='carName'></td>"+
                        "<td id='carPrice'></td>"+
                        "<td id='totalCarPrice'></td>"+
				    "</tr>"+
				"<tbody>"+
					"<tr class='price-table__title'>"+
						"<td class='classification'>Extras</td>"+
						"<td>Price per Day</td>"+
						"<td>Full price</td>"+
					"</tr>"+
					"<tr>"+
						"<td id='extrasName'>CDW/TP</td>"+
						"<td id='extrasPrice'>0,00€ </td>"+
						"<td id='totalPrice'>0,00€</td>"+
					"</tr>";
					reservationObj.wug ?
                    extrasTable+=
                    "<tr>"+
						"<td>WUG</td>"+
						"<td>4,00€</td>"+
						"<td>"+extrasTotal.wug+"€"+"</td>"+
					"</tr>" : "";

					reservationObj.cdwPlus ?
                    extrasTable+=
					"<tr>"+
						"<td>SCDW</td>"+
						"<td>6,00€</td>"+
						"<td>"+extrasTotal.cdwPlus+"€"+"</td>"+
                        "</tr>" : "";
					
					reservationObj.greenCard ?
                    extrasTable+=
					"<tr>"+
						"<td>GreenCard</td>"+
						"<td>25,00€</td>"+
						"<td>25,00€</td>"+
					"</tr>": "";

					reservationObj.addDriver ?
                    extrasTable+=
					"<tr>"+
						"<td>Additional Driver</td>"+
						"<td>10,00€</td>"+
						"<td>10,00€</td>"+
					"</tr>": "";

					reservationObj.childSeat ?
                    extrasTable+=
					"<tr>"+
						"<td>Child safety seat</td>"+
						"<td>5,00€</td>"+
                    "<td>"+extrasTotal.childSeat+"€"+"</td>"+
					"</tr>": "";

					reservationObj.gps ?
                    extrasTable+=
					"<tr>"+
						"<td>Gps navigation</td>"+
						"<td>5,00€</td>"+
						"<td>"+extrasTotal.gps+"€"+"</td>"+
                    "</tr>" : "";

					reservationObj.roofBox ?
                    extrasTable+=
					"<tr>"+
						"<td>Roof box</td>"+
						"<td>7,00€</td>"+
						"<td>"+extrasTotal.roofBox+"€"+"</td>"+
                    "</tr>" : "";

					reservationObj.router ?
                    extrasTable+=
					"<tr>"+
						"<td>MIFI 4G router</td>"+
						"<td>5,00€</td>"+
						"<td>"+extrasTotal.router+"€"+"</td>"+
                    "</tr>" : "";
                    extrasTable+= "</tbody>"+

					"<tbody>"+
                        "<tr class='price-table__title'>"+
                            "<td class='classification'>Total</td>"+
                            "<td></td>"+
                            "<td>Full price</td>"+
                        "</tr>"+
                        "<tr>"+
                            "<td><strong>Total cost:</strong></td>"+
                            "<td></td>"+
                            "<td id='fullPrice'></td>"+
                        "</tr>"+
				"</tbody>"+
			"</table>"
		;
    var div = document.getElementById('extrasTableDiv');
    var div2 = document.getElementById('extrasTableDiv2');
    div2.insertAdjacentHTML('beforeend', reservationInfo);
    div.insertAdjacentHTML('beforeend', extrasTable);
}

function calculateExtras(reservationObj, days) {
    var extrasTotal = {};
    var wug = 0, cdwPlus = 0, greenCard = 0, addDriver = 0, gpsPrice = 0, roofBox = 0, routerPrice = 0, childSeatPrice = 0;
    if (reservationObj.wug) {
        wug = days * 4;
    }
    if (reservationObj.cdwPlus) {
        cdwPlus = days * 6;
    }
    if (reservationObj.greenCard) {
        greenCard = 25;
    }
    if (reservationObj.addDriver) {
        addDriver = 10;
    }
    if (reservationObj.gps) {
        gpsPrice = days * 5 < 50 ? days * 5 : 50;
    }
    if (reservationObj.childSeat) {
        childSeatPrice = days * 5 < 50 ? days * 5 : 50;
    }
    if (reservationObj.roofBox) {
        roofBox += days * 7;
    }
    if (reservationObj.router) {
        routerPrice += days * 5 < 50 ? days * 5 : 50;
    }
    var total = wug + cdwPlus + greenCard + addDriver + gpsPrice +  childSeatPrice + roofBox + routerPrice;


    extrasTotal = {
        "wug": wug,
        "cdwPlus": cdwPlus,
        "greenCard": greenCard,
        "addDriver": addDriver,
        "childSeat": childSeatPrice,
        "gps": gpsPrice,
        "roofBox": roofBox,
        "router": routerPrice
    };

    return {
        "total":total,
        "extrasTotal":extrasTotal
    }
}


