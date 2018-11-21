@extends('layouts.master')
@section('page-content')
    <main id="page-content">
    {{--
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs__title">Our Services</div>
                            <div class="breadcrumbs__items">
                                <div class="breadcrumbs__wrap">
                                    <div class="breadcrumbs__item">
                                        <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="services.html" class="breadcrumbs__item-link">Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    --}}
    <!-- // Breadcrumbs  -->
        <section class="service-info-box">
            <div class="swiper-container-column swiper-container-column-second swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide odd-line">
                        <div class="service-block">
                            <figure class="thumbnail"><span><img src="/images/service_img_4.jpg" alt=""></span></figure>
                            <div class="service-block__content">
                                <h3>One way hire</h3>
                                <p>PRO AUTO offers affordable rates on one way car rental at many Europe locations.
                                    This way you have the freedom to pick up a rent a car in one city and return it to
                                    another location. This service is ideal for those who want to explore multiple
                                    destinations on their travel without worrying about returning to the pick up
                                    location.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide even-line">
                        <div class="service-block">
                            <figure class="thumbnail"><span><img
                                                src="/images/service_img_5.jpg" alt=""></span></figure>
                            <div class="service-block__content">
                                <h3>Car delivery and picking up</h3>
                                <p>Sometimes there just isn't enough hours in the day. So, why would you want to spend
                                    an hour travelling across town to pick up a hire car?
                                    We can deliver and collect the car in any place in Montenegro, hotels, apartments,
                                    bus stations or to destination you want.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide odd-line">
                        <div class="service-block">
                            <figure class="thumbnail"><span><a href="services-post.html"><img
                                                src="/images/services/breakdown_assistance.jpg" alt=""></a></span></figure>
                            <div class="service-block__content">
                                <h3>Breakdown assistance</h3>
                                <p> Just call the phone number provided on your rental document . Please check with the
                                    staff at the rental station to confirm what breakdown or accident assitance is
                                    available. PRO AUTO provides free 24-hour breakdown assistance in case of a
                                    breakdown or accident involving your hire caranywhere</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide odd-line">
                        <div class="service-block">
                            <figure class="thumbnail"><span><a href="services-post.html"><img
                                                src="/images/services/additional_coverNEW.jpg" alt=""></a></span></figure>
                            <div class="service-block__content">
                                <h3>Additional cover</h3>
                                <p> CDW stands for Collison Damage Waiver, and while this might appear to be one of the
                                    more expensive insurance options for your car rental, it is definitely the most
                                    effective, most comprehensive, and will save you from a serious headache should you
                                    get into an accident while driving. There are a variety of insurance options when
                                    renting a car in our company, including Theft Protection, but this add-on is most
                                    definitely worth it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide even-line">
                        <div class="service-block">
                            <figure class="thumbnail"><span><img
                                            src="/images/service_img_6.jpg" alt=""></span></figure>
                            <div class="service-block__content">
                                <h3>Chauffeur drive</h3>
                                <p> In our rent a car company you have possibility to rent a car with driver. we have
                                    staff at high levels of professionalism that drive you to destinations on your way.
                                    enjoy the beauty of Montenegro without thinking about driving</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-column-main"></div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="phone-box">
                        <h1>Join Us and Save on Car Rentals!</h1>
                        <span class="text-link">Great offers for cheap car rental, daily, weekly long term rentals</span>
                        <h3 class="phone-box__number">Call Now: <span><i
                                        class="icon-telephone"></i> +382-67-485-442</span></h3>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- // Content  -->
@endsection
