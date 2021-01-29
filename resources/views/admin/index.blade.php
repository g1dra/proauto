@extends('layouts.master')

@section('page-content')
    <div style="margin-top: 50px">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
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
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car-> model }}</td>
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
                                <a href="{{ action('AdminController@destroy', $car->id) }}">
                                <button type="button" class="btn btn-sm" style="background-color: orangered">Delete</button>
                            </a>
                        </div>
                    </td>
                    <td>{{ $car->created_at->format('d-m-Y') }}</td>
                    <td>{{ $car->updated_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection