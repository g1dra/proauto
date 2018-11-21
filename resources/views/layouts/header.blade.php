<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="THE BEST RENT A CAR SERVICE IN MONTENEGRO WITH OFFERS IN BUDVA, PODGORICA, KOTOR,
        PODGORICA AIRPORT AND TIVAT AIRPORT! PRO AUTO OFFERS LOW CAR RENTAL  PRICES IN MONTENEGRO WITH SPECIAL OFFERS.
        ">
        <meta name="keywords" content="BEST PRICE, CAR HIRE, PODGORICA, BUDVA, KOTOR, BAR, ZABLJAK, TIVAT, MONTENEGRO RENT A CAR, RENT A CAR, PODGORICA RENT A CAR, MONTENEGRO RENT
                                        A CAR PRICE">
        <meta name="author" content="darko.vucetic7@gmail.com">

        <link rel="icon" href="/images/favicon.jpg">
        <title>Rent a car Montenegro - ProAuto</title>
        <!-- Bootstrap core CSS -->
        <script>
            if ( top !== self && ['iPad', 'iPhone', 'iPod'].indexOf(navigator.platform) >= 0 ) top.location.replace( self.location.href );
        </script>
        <link href="/css/plugins/bootstrap.min.css" rel="stylesheet">
        <link href="/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
        <link href="/css/plugins/nivo-slider.css" rel="stylesheet">
        <link href="/css/plugins/swiper.min.css" rel="stylesheet">
        <link href="/css/plugins/intlTelInput.min.css" rel="stylesheet">
        <link href="/css/plugins/remodal.min.css" rel="stylesheet">
        <link href="/css/plugins/bootstrap-datetimepicker.css" rel="stylesheet">
        <link href="/css/plugins/animate.css" rel="stylesheet">
        <link href="/css/plugins/jquery-ui.css" rel="stylesheet">
        <link href="/css/plugins/lightslider.css" rel="stylesheet">
        <link href="/css/plugins/jquery.steps.css" rel="stylesheet">
        @yield("notification-header")
        <link href="/css/main-style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Icon Font-->
        <link href="/iconfont/style.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    </head>

    <!-- Header -->
    <div id="tt-mobile-top-box">
        <div class="tt-container-toggle">
            <div class="tt-search-toggle tt-toggle-tab">
                <form class="tt-search-toggle inside" action="/steps" method="post">
                    @csrf
                    <div class="tt-row">
                        <div class="tt-col">
                            <div class="book-form__text">Pick-Up Information:</div>
                            <div class="tt-row">
                                <select class="tt-form-control tt-select-large" name="location1" id="location1">
                                    <option value="Location">Location*</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city}}">{{$city}}</option>
                                    @endforeach
                                </select>
                                <div class="tt-date-layout datepicker-wrap">
                                    <input type="text" class="tt-input-date datepicker" placeholder="Date" name="date1" >
                                    <i class="icon-calendar-with-a-clock-time-tools"></i>
                                </div>
                                <select class="tt-select-small tt-form-control" name="time1" id="time1">
                                    @for ($i=0;$i<=23;$i++)
                                        <option value="{{$i}}:00">{{$i}}:00</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tt-row">
                        <div class="tt-col">
                            <div class="book-form__text">Drop-Off Information:</div>
                            <div class="tt-row">
                                <select class="tt-form-control tt-select-large" name="location2" id="location2">
                                    <option selected value="Location">Location</option>
                                    @foreach ($cities as $city)
                                        <option value="{{$city}}">{{$city}}</option>
                                    @endforeach
                                </select>
                                <div class="tt-date-layout datepicker-wrap">
                                    <input type="text" class="tt-input-date datepicker" placeholder="Date" id="date2" name="date2">
                                    <i class="icon-calendar-with-a-clock-time-tools"></i>
                                </div>
                                <select class="tt-select-small tt-form-control" id="time2" name="time2">
                                    @for ($i=0;$i<=23;$i++)
                                        <option value="{{$i}}:00">{{$i}}:00</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tt-row tt-row-flex">
                        <div class="tt-col">
                            <div class="book-form__btn">
                                <input type="submit" class="btn" id="setDateBtn"  value="SEARCH">
                            </div>
                        </div>
                    </div>



                </form>
            </div>
            <div class="tt-call-toggle tt-toggle-tab">
                <div class="inside">
                    <ul>
                        <li>
                            <a href="skype:+1-800-123-4567?call">
                                <i class="tt-icon icon-whatsapp"></i>
                                +382 67 485 442
                            </a>
                        </li>
                    </ul>
                    <ul>

                        <li>
                            <a href="mailto:info@mailinfo.com">
                                <i class="tt-icon icon-black-back-closed-envelope-shape"></i>
                                proauto1@mail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
        <ul class="tt-list-btn">
            <li style="color:#0096be"><a href="#" data-target="tt-search-toggle" class="tt-btn-toggle">
                    <i class="icon-car2"></i>
                    <span class="tt-text">Search Auto</span>
                </a>
            </li>
        </ul>
    </div>
    <header class="site-header">
        <div class="mobile-top-panel"></div>
        <div class="mobile-top-panel__fixed">
            <div class="container">
                <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="navbar-header">
                        <img src="/images/logo/logo-no-bg-small.png" style="left:0; position: relative;">
                        <a class="menu-open">
                            <i class="icon-three"></i>
                        </a>
                    </div>
                    <div class="menu-navigation">
                        <a class="btn-close-menu">
                            <i class="icon-remove-symbol"></i>
                            Close
                        </a>
                        <!-- Left nav -->
                        <ul class="menu-navigation__list nav navbar-nav">
                            <li class="{{ Request::is("/") ? 'current': ''}}">
                                <a href="/">Home</a></li>
                            <li class="{{ Request::is("steps") ? 'current': ''}}">
                                <a href="/steps">Book Now</a></li>
                            <li class="{{ Request::is("fleet") ? 'current': ''}}">
                                <a href="/fleet">Fleet</a></li>
                            <li class="{{ Request::is("/posts") ? 'current': ''}}">
                                <a href="/posts">Blog</a></li>
                            <li class="{{ Request::is("services") ? 'current': ''}}">
                                <a href="/services">Services</a></li>
                            <li class="{{ Request::is("rental-terms") ? 'current': ''}}">
                                <a href="/rental-terms">Rental terms</a></li>
                            <li class="{{ Request::is("long-term") ? 'current': ''}}">
                                <a href="/long-term">Long-term</a></li>
                            <li class="{{ Request::is("contacts") ? 'current': ''}}">
                                <a href="/contacts">Contacts</a></li>
                            <li class="{{ Request::is("faq") ? 'current': ''}}">
                                <a href="/faq">FAQ</a></li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="header-container_wrap container">
            <div class="header-container__flex">
                <p><a href="/"><img src="/images/logo/logo-no-bg-new.png" alt="logo" style="width: 400px"></a></p>
                <div class="tt-header-info" style="color: #303742">
                    <div class="tt-item">
                        <div class="tt-icon">
                            <i class="icon-placeholder-for-map"></i>
                        </div>
                        <div class="tt-description">
                             Rent a car Montenegro<br>
                             4. Jul TS-2 , Podgorica<br>
                        </div>
                    </div>
                    <div class="tt-item" style="margin-left:auto; margin-right: 0">
                        <div class="tt-icon">
                            <i class="icon-telephone"></i>
                        </div>
                        <div class="tt-description">
                            <a href="#">+382 67 485 442</a><br>
                            <p class="social-media-list">
                                <i class="icon-skype-logo" title="Skype"></i>
                                <a href="https://www.facebook.com/proauto.rentacar.5" title="Facebook"><i class="icon-facebook-logo"></i></a>
                                <i class="icon-whatsapp" title="Viber"></i>
                                {{--
                                <i class="icon-twitter-letter-logo" title="Twitter"></i>
                                <i class="icon-telegram" title="Telegram"></i>--}}
                            </p>
                        </div>

                    </div>
                    <div class="tt-item" style="margin-right: 0; margin-left:auto">
                        <div class="tt-icon">
                            <i class="icon-clock"></i>
                        </div>
                        <div class="tt-description">
                             Mon-Sun:	8:00 - 20:00<br>
                            <a href="/contacts" style="color: ">  {{"proauto1@mail.com"}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation-wrap stickUp">
            <!-- Navbar fixed top -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="menu-navigation navbar-collapse collapse">

                        <!-- Left nav -->

                        <ul class="menu-navigation__list nav navbar-nav">
                            <li class="{{ Request::is("/") ? 'current': ''}}">
                                <a href="/" data-hover="Home">Home</a></li>
                            <li class="{{ Request::is("steps") ? 'current': ''}}">
                                <a href="/steps" data-hover="Book now">Book now</a></li>
                            <li class="{{ Request::is("fleet") ? 'current': ''}}">
                                <a href="/fleet" data-hover="Fleet">Fleet</a></li>
                            <li class="{{ Request::is("/posts") ? 'current': ''}}">
                                <a href="/posts">Blog</a></li>
                            <li class="{{ Request::is("services") ? 'current': ''}}">
                                <a href="/services" data-hover="services">Services</a></li>
                            <li class="{{ Request::is("rental-terms") ? 'current': ''}}">
                                <a href="/rental-terms">Rental terms</a></li>
                            <li class="{{ Request::is("long-term") ? 'current': ''}}">
                                <a href="/long-term">Long-term</a></li>
                            <li class="{{ Request::is("contacts") ? 'current': ''}}">
                                <a href="/contacts" data-hover="Contacts">Contacts</a></li>
                            <li class="{{ Request::is("faq") ? 'current': ''}}">
                                <a href="/faq" data-hover="FAQ">FAQ</a></li>
                        </ul>


                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container -->
            </div>
        </div>

    </header>
    <!-- // Header -->