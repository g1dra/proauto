@extends('layouts.master')
@section('page-content')
    <main id="page-content">

        <!-- Slider -->
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/slider/slide_2.jpg" title="#htmlcaption1" data-thumb="images/slider/slide_2.jpg"
                     alt=""/>
                {{--<img src="images/slider/mm.jpg" title="#htmlcaption2" data-thumb="images/slider/mm.jpg" alt="" />--}}
                <img src="images/slider/slide_2.jpg" title="#htmlcaption3" data-thumb="images/slider/slide_2.jpg"
                     alt=""/>
                {{--<img src="images/slider/mm.jpg" title="#htmlcaption2" data-thumb="images/slider/mm.jpg" alt="" />--}}
            </div>
            <div id="htmlcaption1" class="nivo-caption">
                <div class="nivo-caption__inner">
                    <div class="text">
                        <h1 class="showtext showtext__h1">Get Special Offers for Winter 2020 <br></h1>
                        <span class="showtext showtext__link"><a href="/steps">Book a car and get discounts for car renting!</a></span>
                    </div>
                </div>
            </div>
            {{--<div id="htmlcaption2" class="nivo-caption">--}}
            {{--<div class="nivo-caption__inner left-side">--}}
            {{--<div class="text">--}}
            {{--<h1 class="showtext showtext__h1">Exploring Montenegro <br></h1>--}}
            {{--<span class="showtext showtext__link"><a href="/steps">It will be more fun with Pro Auto rent a car!</a></span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div id="htmlcaption3" class="nivo-caption">
                <div class="nivo-caption__inner  left-side">
                    <div class="text">
                        <h1 class="showtext showtext__h1">Get Special Offers for Winter 2020 <br></h1>
                        <span class="showtext showtext__link"><a href="/steps">Book a car and get discounts for car renting!</a></span>
                    </div>
                </div>
            </div>
            {{--<div id="htmlcaption4" class="nivo-caption">--}}
            {{--<div class="nivo-caption__inner  left-side">--}}
            {{--<div class="text">--}}
            {{--<h1 class="showtext showtext__h1">Exploring Montenegro <br></h1>--}}
            {{--<span class="showtext showtext__link"><a href="/steps">It will be more fun with Pro Auto rent a car!</a></span>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

        <!-- Slider -->
            <div class="book-form-box">
                <div class="container">
                    <form id="book-form" class="book-form" action="/steps" method="post">
                        @csrf
                        <div class="book-form__block-select">
                            <div class="tt-col">
                                <div class="book-form__text">Pick-Up Information:</div>
                                <div class="tt-row">
                                    <select class="tt-form-control tt-select-large" name="location1">
                                        <option value="Location">Location*</option>
                                        @foreach ($cities as $city)
                                            <option value="{{$city}}">{{$city}}</option>
                                        @endforeach
                                    </select>
                                    <div class="tt-date-layout datepicker-wrap">
                                        <input type='text' class="tt-input-date datepicker" name="date1"
                                               placeholder="Date">
                                        <i class="icon-calendar-with-a-clock-time-tools"></i>
                                    </div>
                                    <select class="tt-select-small tt-form-control" name="time1">
                                        @for ($i=0;$i<=23;$i++)
                                            <option value="{{$i}}:00">{{$i}}:00</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
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
                                        <input type='text' class="tt-input-date datepicker" placeholder="Date"
                                               name="date2">
                                        <i class="icon-calendar-with-a-clock-time-tools"></i>
                                    </div>
                                    <select class="tt-select-small tt-form-control" name="time2">
                                        @for ($i=0;$i<=23;$i++)
                                            <option value="{{$i}}:00">{{$i}}:00</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="tt-col">
                                {{--<div class="book-form__text">Auto Class:</div>
                                <select class="tt-select-large tt-form-control">
                                    <option selected value="SUV">SUV</option>
                                    <option value="value 01">value 01</option>
                                    <option value="value 02">value 02</option>
                                    <option value="value 03">value 03</option>
                                    <option value="value 04">value 04</option>
                                </select>--}}
                            </div>
                        </div>
                        <div class="book-form__btn">
                            <input type="submit" class="btn" id="setDateBtn" value="Book now">
                        </div>
                    </form>
                </div>
            </div>
            <div class="parallax_box">
                <figure class="thumbnail move_img wow slideInLeft" data-wow-delay="0.5s"></figure>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-lg-push-6">
                            <h1>Welcome</h1>
                            <p>Search for Rental cars in Montenegro? We offer a great selection of vehicles for best
                                price. If you need car for short or long-term rental period, we can offer you additonal
                                discounts. </p>
                            <p>Our service is available for you 24/7. If you have any further queries, please contact
                                us.</p>
                            <ul class="list__marker">
                                <li>No deposit!</li>
                                <li>No cancellation or amendment fees</li>
                                <li>No hidden extras to pay - theft and damage cover included</li>
                            </ul>
                            {{-- <a href="services.html" class="btn">Read more</a> todo services--}}
                        </div>
                    </div>
                </div>
            </div>

            <section class="carousel-models_fullwidth">
                <div class="carousel-models_fullwidth__inner">
                    <h1>Our Fleet</h1>
                    <span class="text-link">Great Rental Car Selection. Unbeatable Deals.</span>
                    <div class="swiper-container-models swiper-container">
                        <div class="swiper-wrapper">
                            @if(isset($cars))
                                @foreach($cars as $car)
                                    <div class="model-info swiper-slide">
                                        <figure class="thumbnail">
                                            <img src={{$car->img_path}} alt={{$car->alt}} style="max-height:400px";
                                                 onclick="sendCar({{json_encode($car)}})">
                                        </figure>
                                        <div class="model-info__content">
                                            <h3>{{$car->name}}</h3>
                                            <div class="tt-list-col">
                                                <ul>
                                                    <li>
                                                        <i class="tt-icon icon-car"></i>
                                                        Model: <span>{{$car->model}}</span>
                                                    </li>
                                                    <li>
                                                        <i class="tt-icon icon-car-door"></i>
                                                        Doors: <span>{{$car->doors}}</span>
                                                    </li>
                                                    <li>
                                                        <i class="tt-icon icon-group"></i>
                                                        Passengers: <span>{{$car->passengers}}</span>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <i class="tt-icon icon-manual_g"></i>
                                                        Transmission: <span>{{$car->transmission}}</span>
                                                    </li>
                                                    <li>
                                                        <i class="tt-icon icon-snowflake"></i>
                                                        Air Conditioning:
                                                        <span>@if($car->air_conditioning==1){{"Yes"}}@else{{"No"}}@endif</span>
                                                    </li>
                                                    <li>
                                                        <i class="tt-icon icon-luggage"></i>
                                                        Luggage: <span>{{$car->luggage}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            @if($car->price_14 == 0)
                                                <span class="cost">
                                        <strong>
                                            On Request
                                        </strong> </span>
                                            @else
                                                <span class="cost">From
                                        <strong>
                                            {{$car->price_14}}€
                                        </strong> per day</span>
                                            @endif
                                            <span class="btn btn-model" onclick="sendCar({{json_encode($car)}})">book now</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!-- // swiper-container-car  -->
                    </div>
                    <div class="swiper-pagination-models"></div>
                    <div class="navigation_block">
                        <span class="swiper-button-next"><i class="icon-left-arrow2"></i></span>
                        <span class="swiper-button-prev"><i class="icon-left-arrow"></i></span>
                    </div>
                </div>
            </section>
            <!-- // Full width carousel  -->

            {{--<section class="service-info-box">
                <h1>Featured Services</h1>
                <span class="text-link">More than just a car rental company</span>
                <div class="swiper-container-column swiper-container-column-first swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide odd-line">
                            <div class="service-block">
                                <figure class="thumbnail">
                                    <span>
                                        <a href="services-post.html"><img src="images/service_img_1.jpg" alt=""></a>
                                    </span>
                                </figure>
                                <div class="service-block__content">
                                    <h3>24 Hour Airport Services</h3>
                                    <p>The best and biggest airport transfer company in the city, Airport Transfers is here to provide you with the best one-stop transportation service with minimal fuss and maximum comfort.</p>
                                    <a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide even-line">
                            <div class="service-block">
                                <figure class="thumbnail">
                                <span>
                                    <a href="services-post.html"><img src="images/service_img_2.jpg" alt=""></a>
                                    </span>
                                </figure>
                                <div class="service-block__content">
                                    <h3>Corporate Meetings &amp; Events</h3>
                                    <p>Does your company have employees or clients who frequently rent in the Los Angeles area? Setting up a corporate account allowsus to pre-deliver vehicles to hotels, offices, residences.</p>
                                    <a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide odd-line">
                            <div class="service-block">
                                <figure class="thumbnail">
                                <span>
                                    <a href="services-post.html"><img src="images/service_img_3.jpg" alt=""></a>
                                    </span>
                                </figure>
                                <div class="service-block__content">
                                    <h3>Business Travel</h3>
                                    <p>We offer professional drivers who can chauffeur you to any destination you choose. Or ask for a type of tour or drive you are in the mood for and let us do the rest. </p>
                                    <a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide even-line">
                            <div class="service-block">
                                <figure class="thumbnail">
                                <span>
                                    <a href="services-post.html"><img src="images/service_img_4.jpg" alt=""></a>
                                    </span>
                                </figure>
                                <div class="service-block__content">
                                    <h3>Private Tours</h3>
                                    <p>Huge discounts. Free Delivery and Pickup. Free Car washes. Free upgrades. Free maintenance. We offer amazing deals on car rental rates. Give us a call we make it easy and affordable.</p>
                                    <a href="services-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-services-second"></div>
                <a href="services.html" class="btn">MORE SERVICES</a>
            </section>--}}

            <section class="testimonials-carousel_box">
                <div class="container">
                    <h1>Clients Say</h1>
                    <span class="text-link">What our clients say about us</span>
                    <div class="swiper-container-blockquote swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="block_tesimonial">
                                    <blockquote>
                                        <div class="inner_blockquote">
                                            <div class="wrapper">
                                                <p>We looking for rent a car for a while and we choose the best option
                                                    ever. Very comfortable in everything. Highly recommended for
                                                    everybody, dont choose another big companies on the market. This one
                                                    is the right option for your traveling through Montenegro!</p>
                                                <span class="author_info">
                                            <img src="images/flags/chez.jpg" alt="">
                                            <span class="name"><a href="#">Jakub Ulč</a></span>
                                        <span class="position">Regular Customer</span>
                                        </span>
                                            </div>
                                        </div>
                                    </blockquote>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="block_tesimonial">
                                    <blockquote>
                                        <div class="inner_blockquote">
                                            <div class="wrapper">
                                                <p>We can strongly recommended this rental car!! Customer care on the
                                                    highest level. Definitely we choose this rental again! :) </p>
                                                <span class="author_info">
                                            <img src="images/flags/poland.jpeg" alt="">
                                            <span class="name"><a href="#">Maciej Smarzewski</a></span>
                                        <span class="position">Regular Customer</span>
                                        </span>
                                            </div>
                                        </div>
                                    </blockquote>

                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="block_tesimonial">
                                    <blockquote>
                                        <div class="inner_blockquote">
                                            <div class="wrapper">
                                                <p>Very friendly service. Flexible and trustworthy team. Really cheaper
                                                    then competition.</p>
                                                <span class="author_info">
                                            <img src="images/flags/france.jpeg" alt="">
                                            <span class="name"><a href="#">Alex Legret</a></span>
                                        <span class="position">Regular Customer</span>
                                        </span>
                                            </div>
                                        </div>
                                    </blockquote>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="block_tesimonial">
                                    <blockquote>
                                        <div class="inner_blockquote">
                                            <div class="wrapper">
                                                <p>An excellent smooth and very pleasant experience. Well done. We would
                                                    certainly
                                                    book with this company again</p>
                                                <span class="author_info">
                                            <img src="images/flags/poland.jpeg" width="100" alt="">
                                            <span class="name"><a href="#">Piotr Gorka</a></span>
                                        <span class="position">Regular Customer</span>
                                        </span>
                                            </div>
                                        </div>
                                    </blockquote>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-blockquote"></div>
                    <span class="swiper-button-next1"><i class="icon-left-arrow2"></i></span>
                    <span class="swiper-button-prev1"><i class="icon-left-arrow"></i></span>
                </div>
            </section>
            <section class="blog-posts-carousel">
                <div class="container">
                    <h1>From the Blog</h1>

                    <span class="text-link">Our latest news and events</span>
                    <div class="swiper-container swiper-container-blog">
                        <div class="swiper-wrapper">
                            @foreach($posts as $post)
                                <div class="swiper-slide post-item" style="min-height: 450px !important;">
                                    <div class="post-item__inner" style="min-height: 450px !important;">
                                        <figure class="thumbnail">
                                            <img src="/storage/cover_images/{{$post->cover_image}}" alt=""
                                                 style="height:230px">
                                        </figure>
                                        <div class="post-item__content">
                                            <span class="date">{{$post->created_at}}</span>
                                            <h4 style="height:50px">{{$post->title}}</h4>
                                            <a href="/posts/{{$post->id}}" class="btn btn__marker"><i
                                                        class="icon-arrows"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{--
                                <div class="swiper-container swiper-container-blog">
                                    <div class="swiper-wrapper">
                                        @foreach($posts->items as $post)

                                            --}}
                    {{--<div class="swiper-slide post-item">
                                                <div class="post-item__inner">
                                                    <figure class="thumbnail">
                                                        <img src="/posts?page={{$i}}" alt="">
                                                    </figure>
                                                    <div class="post-item__content">
                                                        <span class="date">$post</span>
                                                        <h4>Finding Cheap Rental Cars</h4>
                                                        <a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                                    </div>
                                                </div>
                                            </div>--}}{{--

                                        @endforeach
                    --}}
                    {{--
                                        <div class="swiper-slide post-item">
                                            <div class="post-item__inner">
                                                <figure class="thumbnail">
                                                    <img src="images/item_img-2.jpg" alt="">
                                                </figure>
                                                <div class="post-item__content">
                                                    <span class="date">11 February, 2017</span>
                                                    <h4>19 ways to save money on rental cars</h4>
                                                    <a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                                </div>
                                            </div>
                                        </div>
                    --}}{{--

                                       --}}
                    {{-- <div class="swiper-slide post-item">
                                            <div class="post-item__inner">
                                                <figure class="thumbnail">
                                                    <img src="images/item_img-3.jpg" alt="">
                                                </figure>
                                                <div class="post-item__content">
                                                    <span class="date">12 February, 2017</span>
                                                    <h4>Finding cheap cars in Montenegro</h4>
                                                    <a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                                </div>
                                            </div>
                                        </div>--}}{{--

                    --}}
                    {{--                    <div class="swiper-slide post-item">
                                            <div class="post-item__inner">
                                                <figure class="thumbnail">
                                                    <img src="images/item_img-1.jpg" alt="">
                                                </figure>
                                                <div class="post-item__content">
                                                    <span class="date">10 February, 2017</span>
                                                    <h4>Finding cheap cars in Montenegro with ProAuto rent a car</h4>
                                                    <a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                                </div>
                                            </div>
                                        </div>--}}{{--

                                        --}}
                    {{--<div class="swiper-slide post-item">
                                            <div class="post-item__inner">
                                                <figure class="thumbnail">
                                                    <img src="images/item_img-2.jpg" alt="">
                                                </figure>
                                                <div class="post-item__content">
                                                    <span class="date">11 February, 2017</span>
                                                    <h4>19 ways to save money on rental cars</h4>
                                                    <a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                                </div>
                                            </div>
                                        </div>--}}{{--

                                        --}}
                    {{--<div class="swiper-slide post-item">
                                            <div class="post-item__inner">
                                                <figure class="thumbnail">
                                                    <img src="images/item_img-3.jpg" alt="">
                                                </figure>
                                                <div class="post-item__content">
                                                    <span class="date">12 February, 2017</span>
                                                    <h4>Finding cheap cars with ProAuto rent a car</h4>
                                                    <a href="single-post.html" class="btn btn__marker"><i class="icon-arrows"></i></a>
                                                </div>
                                            </div>
                                        </div>--}}{{--

                                    </div>
                                    <div class="swiper-pagination swiper-pagination-blog"></div>
                                </div>
                    --}}
                    <span class="swiper-button-next2 swiper-button-next"><i class="icon-left-arrow2"></i></span>
                    <span class="swiper-button-prev2 swiper-button-prev"><i class="icon-left-arrow"></i></span>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="phone-box wow zoomIn">
                            <h1>Join Us and Save on ProAuto Car Rentals!</h1>
                            <span class="text-link">Great offers for cheap car rental, daily, weekly long term rentals</span>
                            <h3 class="phone-box__number">Call Now: <span><i class="icon-telephone"></i> +382-67-485-442</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <section class="car-info-box" data-wow-duration="1s" data-wow-delay="1s">
                <div class="car-info-box__description">
                    <div class="desc-inner">
                        <h1>Car Hire</h1>
                        <span class="text-link">Search for the best deals on rental cars</span>
                        <p>
                            Pro Auto Rent a Car is a company, that offers cheap car rentals in Montenegro. Our rich
                            experiences ensure a great selection of vehicles at reasonable prices.
                            Our fleet of cars boasts newer cars, that offer absolute comfort.
                            Our goal is accessibility and user-friendliness. And our motto is: the best service for the
                            best price.
                            Our company is located at Podgorica downtown, and we can deliver the car at Airports in
                            Montenegro or in hotels where you are located.
                        </p>
                    </div>
                </div>
                <figure class="car-info-box__thumb has-second-img">
                    <img src="images/footer.jpg" alt="">
                </figure>
            </section>
        </div>
    </main>
@endsection