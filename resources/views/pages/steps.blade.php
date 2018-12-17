@extends('layouts.master')
@section('notification-header')
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="/css/plugins/amaran.min.css">
@endsection
@section('page-content')
    <!-- Content  -->
    <main id="page-content" style="margin-top:40px">
{{--
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Fleet</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="/" class="breadcrumbs__item-link">Home</a> <span>/</span> <a
                                            href="/steps" class="breadcrumbs__item-link">Steps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
--}}


            {{--<div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="row steps">
                        <div class="col-xs-12 col-sm-6 col-xl-3 step">
                            test
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 step">
                            te4st
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 step">
                            test
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3 step">
                            test
                        </div>
                    </div>
                </div>
            </div> --}}
        {{--@isset($car->img_path)--}}
        {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div style="margin: auto">--}}
                        {{--<a class="hover">--}}
                            {{--<img src="/{{$car->img_path}}" alt={{$car->alt}} style="">--}}
                        {{--</a>--}}
            {{--</div>--}}
                {{--</div>--}}
        {{--</div>--}}
        {{--@endisset--}}

        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <form id="example-advanced-form">
                            @csrf
                            <h3><i class="icon-calendar-with-a-clock-time-tools" style="position: inherit"></i> &nbspOrder Form</h3>

                            <fieldset style="border: none">
                                <div class="order-details-form">
                                <div class="inner-form">
                                    <h3>Order Form</h3>
                                    <div class="clearfix">
                                        <div id="successBooking">
                                            <p>Your message was sent successfully!</p>
                                        </div>
                                        <div id="errorBooking">
                                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                                        </div>
                                    </div>
                                    <div class="inner-form__elements">
                                        <div class="inner-half">
                                            <h5>New Reservation</h5>
                                            <div class="location" style="margin-bottom: 8px">
                                                <select class="tt-form-control tt-select-large" name="location1" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                                                    <option value="{{$orderForm->location1 or ''}}">{{$orderForm->location1 or "Airport or anywhere in Montenegro*"}}</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{$city}}">{{$city}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="text-element checkbox-div">
                                                <div class="wishes">
                                                    <div class="box-checkbox">
                                                        <input type="checkbox" name="pickupLocation" id="checkbox-03" value="no">
                                                        <label for="checkbox-03">I would like to return car at pickup location</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="location" style="margin-bottom: 8px">
                                                <select class="tt-form-control tt-select-large" name="location2" id="location2" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                                                    <option value="{{$orderForm->location2 or ''}}">{{$orderForm->location2 or "Airport or anywhere in Montenegro*"}}</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{$city}}">{{$city}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="inner-half__width">
                                                <div class="input-date datetimepicker-wrap">
                                                    <input type="text" name="date" id="datetimepicker1" class="datetimepicker" placeholder="{{$orderForm->date1 or 'Pick-up date*'}}" value="{{$orderForm->date1 or ''}}" required>
                                                    <i class="icon-calendar-with-a-clock-time-tools"></i>
                                                </div>
                                                <div class="input-time">
                                                    <input type="text" name="time" id="timepicker1" class="timepicker" placeholder="Pick-up time" value="{{$orderForm->time1 or ''}}" required>
                                                    <i class="icon-clock"></i>
                                                </div>
                                            </div>

                                            <div class="inner-half__width">
                                                <div class="input-date datetimepicker-wrap">
                                                    <input type="text" name="date1" id="datetimepicker2" class="datetimepicker" placeholder="{{$orderForm->date2 or 'Drop of date*'}}" value="{{$orderForm->date2 or ''}}" required>
                                                    <i class="icon-calendar-with-a-clock-time-tools"></i>
                                                </div>
                                                <div class="input-time">
                                                    <input type="text" name="time1" class="timepicker" placeholder="Drop-off time" value="{{$orderForm->time2 or ''}}" required>
                                                    <i class="icon-clock"></i>
                                                </div>
                                            </div>

                                            <div class="location-drop-off">
                                                <input type="text" name="flightNumber" placeholder="Enter your flight number (Optional)">
                                                <i class="icon-placeholder-for-map"></i>
                                            </div>

                                            <div class="passengers-luggage">
                                            </div>
                                        </div>
                                        <div class="inner-half">
                                            <h5>Passenger's Contact Info</h5>
                                            <div class="inner-half__width">
                                                <div class="first-name">
                                                    <input type="text" name="firstname" placeholder="First Name*" required>
                                                </div>
                                                <div class="last-name">
                                                    <input type="text" name="lastname" placeholder="Last Name*" required>
                                                </div>
                                            </div>

                                            <div class="inner-half__width">
                                                <div class="your-phone">
                                                    <input type="tel" name="phone" placeholder="Your phone">
                                                </div>
                                                <div class="email">
                                                    <input type="text" name="email" placeholder="E-mail*" required>
                                                </div>
                                            </div>
                                            <div class="specialreguests">
                                                <textarea name="specialreguests" placeholder="Special Requests"></textarea>
                                                <span class="textarea-text">(Maximum characters: 250)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="car" id="carInput" value="{{json_encode($car)}}">

                                    {{--<button type="submit" class="btn">CONTINUE</button>--}}
                                </div>
                                </div>
                            </fieldset>

                            <h3><i class="icon-car2"></i>&nbsp; Select car </h3>
                            <fieldset style="border: none">
                                <section class="isotop-box">
                                    <div class="container containerTest" style="max-width: 1600px;">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="gallery row" id="gallery">
                                                    @foreach($cars as $car)
                                                        <div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
                                                            <figure class="gallery__item__image">
                                                                <a class="hover" href="#" onclick="carSelect({{$car}})">
                                                                    <img style="height: 185px !important; width: 400px;" src="/{{$car->img_path}}"  alt={{$car->alt}} />
                                                                    <i class="icon-arrow-down-sign-to-navigate2"></i>
                                                                </a>
                                                            </figure>
                                                            <div class="gallery__item__content">
                                                                <h3>{{$car->name}} </h3> <h6>or similar</h6>
                                                                <ul class="tt-list-descriptions">
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
                                                                    <li>
                                                                        <i class="tt-icon icon-manual_g"></i>
                                                                        Transmission: <span>{{$car->transmission}}</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="tt-icon icon-snowflake"></i>
                                                                        Air Conditioning: <span>@if($car->air_conditioning==1){{"Yes"}}@else{{"No"}}@endif</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="tt-icon icon-luggage"></i>
                                                                        Luggage:
                                                                        <span>
                                                                        {{$car->luggage}}
                                                                            </span>
                                                                    </li>
                                                                    @if(strlen($car->luggage)<10)
                                                                        <li>&nbsp;</li>
                                                                    @endif
                                                                </ul>
                                                                <span class="cost">
                                                                    <span><strong>{{$car->price_14}}€</strong>/ day </span>
                                                                    {{--<span><strong>{{$car->price_6}}€</strong> / day</span>--}}
                                                                </span>

                                                                <a href="#" onclick="carSelect({{$car}})"><span class="btn btn-mini" >Select</span></a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div> <!-- //row -->
                                    </div> <!-- //Container -->
                                </section>
                            </fieldset>

                            <h3><i class="icon-commerce"></i>&nbsp; Extras</h3>

                            <fieldset style="border: none">

                                    <h3>Insurance</h3>
                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>Collision damage waiver and theft protection with excess
                                                (CDW/TP)</p>
                                            <p>Included 0,00€ per day </p>
                                        </div>

                                            <div class="extras-item-checkbox">
                                                <span>Included</span>
                                                <input type="checkbox" checked name="cdwtp">
                                        </div>
                                    </div>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>Wheels, underside and glass coverage (WUG)</p>
                                            <p> 4,00€ per day </p>
                                        </div>
                                            <div class="extras-item-checkbox">
                                                <span>&nbsp;</span>
                                                <input type="checkbox" name="wug">
                                            </div>
                                    </div>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>Super collision damage waiver (SCDW)</p>
                                            <p>6,00€ per day </p>
                                        </div>
                                        <div class="extras-item-checkbox">
                                                <span>&nbsp;</span>
                                                <input type="checkbox" name="cdwPlus">
                                        </div>
                                    </div>



                                    <h3>Extras</h3>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>Green card (for traveling outside of Montenegro)</p>
                                            <p> 25,00€ for total time </p>
                                        </div>
                                        <div class="extras-item-checkbox">
                                            <span>&nbsp;</span>
                                            <input type="checkbox" name="greenCard">
                                        </div>
                                    </div>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>Additional Driver</p>
                                            <p> 10€ for total time </p>
                                        </div>
                                        <div class="extras-item-checkbox">
                                            <input type="checkbox" name="addDriver">
                                        </div>
                                    </div>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>Child safety seat</p>
                                            <p> 5,00€ per day (max 50,00€)</p>
                                        </div>

                                        {{--<div class="extras-quantity" >
                                            <label for="incrament"></label>
                                            <input type="text" value="1">
                                            <div>+</div>
                                        </div>--}}
                                            <div class="extras-item-checkbox">
                                                <span></span>
                                                <input type="checkbox" name="childSeat">
                                            </div>
                                    </div>

                                    <div class="extras-item">

                                        <div class="extras-item-text">
                                            <p>Gps navigation</p>
                                            <p> 5,00€ per day (max 50,00€)</p>
                                        </div>
                                            <div class="extras-item-checkbox">
                                                <span>&nbsp;</span>
                                                <input type="checkbox" name="gps">
                                            </div>
                                    </div>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p> Roof box </p>
                                            <p> 7,00€ per day </p>
                                        </div>
                                        <div class="extras-item-checkbox">
                                                <span>&nbsp;</span>
                                                <input type="checkbox" name="roofBox">
                                        </div>
                                    </div>

                                    <div class="extras-item">
                                        <div class="extras-item-text">
                                            <p>MIFI 4G router</p>
                                            <p>Unlimited data 5,00€ per day (max 50,00€)</p>
                                        </div>
                                        <div class="extras-item-checkbox">
                                            <input type="checkbox" name="router">
                                        </div>

                                    </div>
                            </fieldset>

                            <h3> <i class="icon-check-mark"></i>  Finish Reservation</h3>
                            <fieldset style="border: none">
                                <div id="extrasTableDiv2">

                                </div>
                                <div class="col-xs-12">
                                    <div class="price-box">

                                        <div id="extrasTableDiv" class="price-box">

                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        </form>
                    </div>
                </div>
        </div>



    </main>
    <!-- // Content  -->
@endsection
@section('notification.footer')
    <script>
        $( document ).ready(function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lc_H3wUAAAAAMhZ20K9fkVsCR2yMp94mZAlS6kQ', {action: 'steps'})
                    .then(function(token) {
                    document.getElementById('g-recaptcha-response').value=token;
                })
            })
        });
    </script>
    <script src="/js/plugins/jquery.amaran.min.js"></script>
@endsection