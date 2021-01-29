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
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="model">Car Model</label>
                <input type="text" class="form-control" id="model" placeholder="Model">
            </div>

            <div class="form-group">
                <label for="doors">Doors</label>
                <input type="number" class="form-control" id="doors" placeholder="Insert number of doors">
            </div>

            <div class="form-group">
                <label for="passengers">Passengers</label>
                <input type="number" class="form-control" id="passengers" placeholder="Insert number of passengers">
            </div>

            <div class="form-group">
                <label for="doors">Transmission</label>
                <select class="form-control" id="transmission" name="transmission">
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
                <input type="text" class="form-control" id="luggage" placeholder="Luggage">
            </div>

            <div class="form-group">
                <label for="price_3">Price 3</label>
                <input type="number" class="form-control" id="price_3" placeholder="Price 3">
            </div>

            <div class="form-group">
                <label for="price_6">Price 6</label>
                <input type="number" class="form-control" id="price_6" placeholder="Price 6">
            </div>

            <div class="form-group">
                <label for="price_14">Price 14</label>
                <input type="number" class="form-control" id="price_14" placeholder="Price 14">
            </div>

            <div class="form-group">
                <label for="img_path">Slider image</label>
                <input type="file" id="img_path" name="img_path">
            </div>

            <div class="form-group">
                <label for="img_path_1">Details 1 image</label>
                <input type="file" id="img_path_1" name="img_path_1">
            </div>

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