@extends('layouts.master')
@section('page-content')
    <!-- Content  -->
    <main id="page-content">
{{--
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Fleet</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="/" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="fleet.html" class="breadcrumbs__item-link">Fleet</a> <span>/</span> <a href="details.html" class="breadcrumbs__item-link">Hyundai i30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
--}}
        <!-- // Breadcrumbs  -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="model-details-box">
                        <div class="model-details-box__inner">
                            <form id="example-advanced-form" action="#">

                                <h3><i class="icon-calendar-with-a-clock-time-tools"></i> &nbsp;Booking</h3>

                                <fieldset style="border: none">

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
                                                    <select class="tt-form-control tt-select-large">
                                                        <option selected="" value="Location">Airport or anywhere in Montengero</option>
                                                        <option value="Washington">Washington</option>
                                                        <option value="New York">New York</option>
                                                        <option value="Boston">Boston</option>
                                                        <option value="Florida">Florida</option>
                                                    </select>
                                                </div>

                                                <div class="text-element checkbox-div">
                                                    <div class="wishes">
                                                        <div class="box-checkbox">
                                                            <input type="checkbox" name="takeback1" id="checkbox-03" value="yes">
                                                            <label for="checkbox-03">I would like to return car at pickup location</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="location" style="margin-bottom: 8px">
                                                    <select class="tt-form-control tt-select-large">
                                                        <option selected="" value="Airport or anywhere in Montengero">Airport or anywhere in Montengero</option>
                                                        <option value="Washington">Washington</option>
                                                        <option value="New York">New York</option>
                                                        <option value="Boston">Boston</option>
                                                        <option value="Florida">Florida</option>
                                                    </select>
                                                </div>

                                                <div class="inner-half__width">
                                                    <div class="input-date datetimepicker-wrap">
                                                        <input type="text" name="date" id="datetimepicker1" class="datetimepicker" placeholder="Pick-up date">
                                                        <i class="icon-calendar-with-a-clock-time-tools"></i>
                                                    </div>
                                                    <div class="input-time">
                                                        <input type="text" name="time" id="timepicker1" class="timepicker" placeholder="Pick-up time">
                                                        <i class="icon-clock"></i>
                                                    </div>
                                                </div>
                                                <div class="inner-half__width">
                                                    <div class="input-date datetimepicker-wrap">
                                                        <input type="text" name="date1" class="datetimepicker" placeholder="Drop-off date">
                                                        <i class="icon-calendar-with-a-clock-time-tools"></i>
                                                    </div>
                                                    <div class="input-time">
                                                        <input type="text" name="time1" class="timepicker" placeholder="Drop-off time">
                                                        <i class="icon-clock"></i>
                                                    </div>
                                                </div>

                                                <div class="location-drop-off">
                                                    <input type="text" name="flightNumber" placeholder="Enter your flight number (Optional)">
                                                    <i class="icon-placeholder-for-map"></i>
                                                </div>

                                            </div>
                                            <div class="inner-half">
                                                <h5>Passenger's Contact Info</h5>
                                                <div class="inner-half__width">
                                                    <div class="first-name">
                                                        <input type="text" name="firstname" placeholder="First Name*">
                                                    </div>
                                                    <div class="last-name">
                                                        <input type="text" name="lastname" placeholder="Last Name*">
                                                    </div>
                                                </div>

                                                <div class="inner-half__width">
                                                    <div class="your-phone">
                                                        <input type="tel" name="phone" placeholder="Your phone">
                                                    </div>
                                                    <div class="email">
                                                        <input type="text" name="email" placeholder="E-mail">
                                                    </div>
                                                </div>
                                                <div class="specialreguests">
                                                    <textarea name="specialreguests" placeholder="Special Requests"></textarea>
                                                    <span class="textarea-text">(Maximum characters: 250)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>

                                <h3><i class="icon-car2"></i>&nbsp; Select car </h3>
                                <fieldset style="border: none">

                                </fieldset>

                                <h3><i class="icon-commerce"></i>&nbsp; Extras</h3>
                                <fieldset style="border: none">

                                </fieldset>

                                <h3>Finish</h3>
                                <fieldset style="border: none">


                                    {{--<input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>--}}
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- // Content  -->
@endsection