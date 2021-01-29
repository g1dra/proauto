@extends('layouts.master')

@section('page-content')
    <form>
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
                <input type="text" class="form-control" id="name" value="{{ $car->name }}">
            </div>

            <div class="form-group">
                <label for="model">Car Model</label>
                <input type="text" class="form-control" id="model" value="{{ $car->model }}">
            </div>

            <div class="form-group">
                <label for="doors">Doors</label>
                <input type="number" class="form-control" id="doors" value="{{ $car->doors }}">
            </div>

            <div class="form-group">
                <label for="passengers">Passengers</label>
                <input type="number" class="form-control" id="passengers" value="{{ $car->passengers }}">
            </div>

            <div class="form-group">
                <label for="doors">Transmission</label>
                <select class="form-control" id="transmission" name="transmission">
                    <option value="{{$car->transmission}}">{{ $car->transmission }}</option>
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                </select>
            </div>

            <div class="form-group">
                <label for="air_conditioning">Air conditioning</label>
                <select class="form-control" id="air_conditioning" name="air_conditioning">
                    <option value="true">Yes</option>
                    <option value="false">No</option>
                </select>
            </div>

            <div class="form-group">
                <label for="luggage">Luggage</label>
                <input type="text" class="form-control" id="luggage" value="{{ $car->luggage }}">
            </div>

            <div class="form-group">
                <label for="price_3">Price 3</label>
                <input type="number" class="form-control" id="price_3" value="{{ $car->price_3 }}">
            </div>

            <div class="form-group">
                <label for="price_6">Price 6</label>
                <input type="number" class="form-control" id="price_6" value="{{ $car->price_6 }}">
            </div>

            <div class="form-group">
                <label for="price_14">Price 14</label>
                <input type="number" class="form-control" id="price_14" value="{{ $car->price_14 }}">
            </div>

            <img src="/{{  $car->img_path }}" width="200px">
            <div class="form-group">
                <label for="img_path">Change slider image</label>
                <input type="file" id="img_path" name="img_path">
            </div>


            <img src="/{{  $car->img_path_1 }}" width="200px">
            <div class="form-group">
                <label for="img_path_1">Details 1 image</label>
                <input type="file" id="img_path_1" name="img_path_1">
            </div>
            <img src="/{{  $car->img_path_2 }}" width="200px">
            <div class="form-group">
                <label for="img_path_2">Details 2 image</label>
                <input type="file" id="img_path_2" name="img_path_2">
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>

        </div>
    </form>
@endsection