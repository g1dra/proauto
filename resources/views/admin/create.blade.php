@extends('layouts.master')

@section('page-content')
    <form action="/admin" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container" style="margin-top: 50px">
            <div class="form-group">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">Back to Admin</a>
                    </li>
                </ul>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Car Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="order">Order</label>
                <input type="number" class="form-control" id="order" placeholder="Insert order of car in slider"
                       name="order" value="{{old('order')}}">
            </div>

            <div class="form-group">
                <label for="model">Car Model</label>
                <input type="text" class="form-control" id="model" placeholder="Model" name="model" value="{{old('model')}}">
            </div>

            <div class="form-group">
                <label for="doors">Doors</label>
                <input type="number" class="form-control" id="doors" placeholder="Insert number of doors" name="doors"
                       value="{{old('doors')}}">
            </div>

            <div class="form-group">
                <label for="passengers">Passengers</label>
                <input type="number" class="form-control" id="passengers" placeholder="Insert number of passengers"
                       name="passengers" value="{{old('passengers')}}">
            </div>

            <div class="form-group">
                <label for="transmission">Transmission</label>
                <select class="form-control" id="transmission" name="transmission">
                    <option value="" disabled>Select your option</option>
                    <option value="Manual" @if(old('transmission') == 'Manual') {{ 'selected' }} @endif >Manual</option>
                    <option value="Automatic" @if(old('transmission') == 'Automatic') {{ 'selected' }} @endif >Automatic</option>
                </select>
            </div>

            <div class="form-group">
                <label for="air_conditioning">Air conditioning</label>
                <select class="form-control" id="air_conditioning" name="air_conditioning">
                    <option value="" disabled>Select your option</option>
                    <option value="true" @if(old('air_conditioning') == 'true') {{ 'selected' }} @endif >Yes</option>
                    <option value="false" @if(old('air_conditioning') == 'false') {{ 'selected' }} @endif >No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="luggage">Luggage</label>
                <input type="text" class="form-control" id="luggage" placeholder="Luggage" name="luggage"
                       value="{{old('luggage')}}">
            </div>

            <div class="form-group">
                <label for="price_3">Price 3</label>
                <input type="number" class="form-control" id="price_3" placeholder="Price 3" name="price_3"
                       value="{{old('price_3')}}">
            </div>

            <div class="form-group">
                <label for="price_6">Price 6</label>
                <input type="number" class="form-control" id="price_6" placeholder="Price 6" name="price_6"
                       value="{{old('price_6')}}">
            </div>

            <div class="form-group">
                <label for="price_14">Price 14</label>
                <input type="number" class="form-control" id="price_14" placeholder="Price 14" name="price_14"
                       value="{{old('price_14')}}">
            </div>

            <div class="form-group">
                <label for="img_path">Slider image with size: 897x333 px</label>
                <input type="file" id="img_path" name="img_path" value="{{old('img_path')}}">
            </div>

            <div class="form-group">
                <label for="img_path_1">Details 1 image with size: 671x333 px</label>
                <input type="file" id="img_path_1" name="img_path_1" value="{{old('img_path_1')}}">
            </div>

            <div class="form-group">
                <label for="img_path_2">Details 2 image  with size: 671x333 px</label>
                <input type="file" id="img_path_2" name="img_path_2" value="{{old('img_path_2')}}">
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>

        </div>
    </form>
@endsection