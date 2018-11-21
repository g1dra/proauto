@extends('layouts.master')
@section('page-content')
    <!-- Content  -->
    <main id="page-content">
       {{-- <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="breadcrumbs__title">Fleet</div>
                        <div class="breadcrumbs__items">
                            <div class="breadcrumbs__wrap">
                                <div class="breadcrumbs__item">
                                    <a href="/" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="/fleet" class="breadcrumbs__item-link">Fleet</a> <span>/</span> <a href="details.html" class="breadcrumbs__item-link">{{$car->name}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <!-- // Breadcrumbs  -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="model-details-box">
                        <a href="fleet.html" class="back-btn">Back to Vehicle Fleet</a>
                        <div class="model-details-box__inner">
                            <div class="model-details-box__info">
                                <h3>{{$car->name}}</h3>
                                <h6>VEHICLE FEATURES</h6>
                                <table class="details-car">
                                    <tr>
                                        <th>{{$car->name}}</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Number of Passengers:</td>
                                        <td>{{$car->passengers}}</td>
                                    </tr>
                                    <tr>
                                        <td>Luggage Capacity:</td>
                                        <td>{{$car->luggage}}</td>
                                    </tr>
                                    <tr>
                                        <td>Doors:</td>
                                        <td>{{$car->doors}}</td>
                                    </tr>
                                    <tr>
                                        <td>Transmission:</td>
                                        <td>{{$car->transmission}}</td>
                                    </tr>
                                </table>
                                <a href="#" class="btn">Book now</a>
                            </div>
                            <div class="model-slider-wrapper">
                                <ul id="lightSlider" class="model-slider">
                                    <li data-thumb="/{{$car->img_path_2}}">
                                        <img src="/{{$car->img_path_2}}" alt="" />
                                    </li>
                                    <li data-thumb="/{{$car->img_path_1}}">
                                        <img src="/{{$car->img_path_1}}" alt="" />
                                    </li>
                                    <li data-thumb="/{{$car->img_path}}" style="background-color: gainsboro;">
                                        <img src="/{{$car->img_path}}" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- // Content  -->
@endsection