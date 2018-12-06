@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="col-7 offset-1">
            @include('layouts.errors')
        </div>
        {{-- action is pointed to the named route people.store which translates to a POST to /people --}}
        <form method="POST" action="{{ route('rentals.store') }}">
            @csrf
            <div class="form-group row">
                <label for="users_id" class="col-2 offset-1 col-form-label text-right">Name
                </label>
                <div class="col-5">
                    <select id="users_id" name="users_id" class="custom-select">

                        @foreach($user as $users)
                            <option value="{{ $users['id'] }}">{{ $users['name'] }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="disc_id" class="col-2 offset-1 col-form-label text-right">Movie and Kiosk</label>
                <div class="col-5">
                    <select id="disc_id" name="disc_id" class="custom-select">

                        @foreach($disc as $discs)
                            <option value="{{ $discs['id'] }}">{{ $discs['movie_id'] }} {{ $discs['kiosk_id'] }}</option>
                        @endforeach

                    </select>

                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-5">
                    <button name="submit" type="submit" class="btn btn-primary">Grab Rental</button>
                </div>
            </div>
        </form>
    </div>
@endsection