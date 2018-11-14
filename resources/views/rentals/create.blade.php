@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-7 offset-1">
            @include('layouts.errors')
        </div>
        {{-- action is pointed to the named route people.store which translates to a POST to /people --}}
        <form method="POST" action="{{ route('rentals.store') }}">
            @csrf
            <div class="form-group row">
                <label for="person_id" class="col-2 offset-1 col-form-label text-right">Renter</label>
                <div class="col-5">
                    <select id="person_id" name="person_id" class="custom-select">

                        @foreach($people as $person)
                            <option value="{{ $person['id'] }}">{{ $person['lastname'] }}, {{ $person['firstname'] }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="car_id" class="col-2 offset-1 col-form-label text-right">Car</label>
                <div class="col-5">
                    <select id="car_id" name="car_id" class="custom-select">

                        @foreach($cars as $car)
                            <option value="{{ $car['id'] }}">{{ $car['year'] }} {{ $car['make'] }} {{ $car['model'] }}</option>
                        @endforeach

                    </select>

                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-5">
                    <button name="submit" type="submit" class="btn btn-primary">Save Rental</button>
                </div>
            </div>
        </form>
    </div>
@endsection