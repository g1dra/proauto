@extends('layouts.master')

@section('page-content')
    @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success!</strong> {{ Session::get('message', '') }}
        </div>
    @endif





    <div style="margin-top: 50px" class="container-fluid">
       {{-- <div class="form-group">
            <ul class="nav">
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>--}}
        <div class="form-group">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/create">Add new car</a>
                </li>
            </ul>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Order</th>
                <th scope="col">Model</th>
                <th scope="col">Doors</th>
                <th scope="col">Passengers</th>
                <th scope="col">Transmission</th>
                <th scope="col">Air Conditioning</th>
                <th scope="col">Luggage</th>
                <th scope="col">Price 3</th>
                <th scope="col">Price 6</th>
                <th scope="col">Price 14</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td><img src="{{$car->img_path}}" width="200px"></td>
                    <td>{{ $car->order }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->doors }}</td>
                    <td>{{ $car->passengers }}</td>
                    <td>{{ $car->transmission }}</td>
                    <td>{{ $car->air_conditioning }}</td>
                    <td>{{ $car->luggage }}</td>
                    <td>{{ $car->price_3 }} &#8364</td>
                    <td>{{ $car->price_6 }} &#8364</td>
                    <td>{{ $car->price_14 }} &#8364</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ action('AdminController@edit', $car->id) }}">
                                <button type="button" class="btn btn-sm">Edit</button>
                            </a>
                            <a href="/admin/{{$car->id}}" class="data-delete" data-method="DELETE"
                               data-confirm="Are you sure?" data-form="car-{{$car->id}}">
                                <button type="button" class="btn btn-sm" style="background-color: orangered">Delete
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <div class="form-group">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/hero-slider/create">Add new slider</a>
                </li>
            </ul>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>#</td>
                <td>Image</td>
                <td>Image Path</td>
                <td>Image Text</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($heroSlider as $slider)
                <tr>
                    <td>{{$slider->id}}</td>
                    <td><img src="{{$slider->image_path}}" width="300"></td>
                    <td>{{$slider->image_path}}</td>
                    <td>{{$slider->image_text}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ action('HeroSliderController@edit', $slider->id) }}">
                                <button type="button" class="btn btn-sm">Edit</button>
                            </a>
                            <a href="/admin/hero-slider/{{$slider->id}}" class="data-delete" data-method="DELETE"
                               data-confirm="Are you sure?" data-form="car-{{$slider->id}}">
                                <button type="button" class="btn btn-sm" style="background-color: orangered">Delete
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
@section('footer-scripts')
    <script src="{{asset('/js/formForDelete.js')}}"></script>
@endsection