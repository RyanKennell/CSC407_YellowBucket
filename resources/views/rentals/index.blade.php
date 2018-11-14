@extends('layouts.app')

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
            <th>Disc</th>
            <th>Rental Date</th>
            <th>Return Date</th>
        </tr>
        </thead>
        <tbody>
        {{-- Loop through all of the people that rented a car --}}
        @foreach($rentals as $rental)

            {{-- Loop through all of the cars that a person has rented --}}
            @foreach($rental['rentals'] as $disc)
                <tr>
                    <td>{{ $rental['lastname'] }}, {{ $rental['firstname'] }}</td>
                    <td>{{ $disc['make'] }} {{ $disc['model'] }}</td>
                    <td>{{ $disc['pivot']['rentalDate'] }}</td>
                    <td>{{ $disc['pivot']['returnDate'] }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>
@endsection