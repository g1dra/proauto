@extends('layouts.master')

@section('page-content')
    <form action="{{action('HeroSliderController@update',$heroSlider->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container" style="margin-top: 50px">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <img src="{{$heroSlider->image_path}}" width="200px">
            <div class="form-group">
                <label for="img_path">Slider image with size: 1920x780 px</label>
                <input type="file" id="image_path" name="image_path">
            </div>

            <div class="form-group">
                <label for="image_text">Image text</label>
                <input type="text" class="form-control" id="image_text" placeholder="Name" name="image_text">
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>


@endsection
