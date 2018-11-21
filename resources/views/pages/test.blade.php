@extends('layouts.master')

@section('page-content')
    <div class="tt-row">
        <select class="tt-form-control tt-select-large" name="location1" id="location1">
            <option value="Location">Location*</option>
            @foreach ($cities as $city)
                <option value="{{$city}}">{{$city}}</option>
            @endforeach
        </select>
        <div class="tt-date-layout datepicker-wrap">
            <input type='text' class="tt-input-date datepicker" name="date1" placeholder="Date">
            <i class="icon-calendar-with-a-clock-time-tools"></i>
        </div>
        <div class="tt-date-layout datepicker-wrap">
            <input type='text' class="tt-input-date datepicker" placeholder="Date" name="date2">
            <i class="icon-calendar-with-a-clock-time-tools"></i>
        </div>
        <select class="tt-select-small tt-form-control" name="time1" id="time1">
            @for ($i=0;$i<=23;$i++)
                <option value="{{$i}}:00">{{$i}}:00</option>
            @endfor
        </select>
    </div>


@endsection
