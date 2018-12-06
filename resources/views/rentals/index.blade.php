@extends('layouts.main')

@section('content')
<div class="container">

    <h1>Disc Rentals</h1>
    <div class="pb-1 text-right">
        <a href="{{ route('rentals.create') }}" class="btn btn-sm btn-success">New Rental</a>
    </div>


    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Disc and Kiosks</th>
            <th>Check out</th>
            <th>Check In</th>
        </tr>
        </thead>
        <tbody>
        {{-- Loop through all of the people that rented a car --}}
        @foreach($rentals as $rental)

            {{-- Loop through all of the cars that a person has rented --}}
            @foreach($rental['rentals'] as $disc)
                <tr>
                    <td>{{ $rental['name'] }}</td>
                    <td>{{ $disc['movie_id'] }} {{ $disc['kiosk_id'] }}</td>
                    <td>{{ $disc['pivot']['checkout_time'] }}</td>
                    <td>{{ $disc['pivot']['checkin_time'] }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>
@endsection