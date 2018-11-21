@extends('layouts.master')
@section('page-content')
    <!-- Content  -->
    <main id="page-content">
        {{--<div class="breadcrumbs">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<div class="breadcrumbs__title">Fleet</div>--}}
                        {{--<div class="breadcrumbs__items">--}}
                            {{--<div class="breadcrumbs__wrap">--}}
                                {{--<div class="breadcrumbs__item">--}}
                                    {{--<a href="/" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="/fleet" class="breadcrumbs__item-link">Fleet</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- // Breadcrumbs  -->


        <section class="isotop-box">
            <div class="container" style="max-width: 1600px">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="gallery row" id="gallery">
                    @foreach($cars as $car)
                        <div class="gallery__item col-xs-12 col-sm-6 col-xl-4">
                            <figure class="gallery__item__image">
                                <a class="hover" onclick="sendCar({{json_encode($car)}})">
                                    <img style="height: 185px !important; width: 400px;" src={{$car->img_path}} alt={{$car->alt}} />
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
                                <u><a href="fleet/{{$car->id}}" class="link-gallery">View Details</a></u>
                                <span class="btn btn-mini" onclick="sendCar({{json_encode($car)}})">Book now</span>
                            </div>
                        </div>
                    @endforeach
                        </div>
                    </div>
                </div> <!-- //row -->
            </div> <!-- //Container -->
        </section>

    </main>
    <!-- // Content  -->
    @endsection