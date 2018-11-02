@extends('layouts.app')
<!--Author @ Brandon LaGorga-->
@section('content')
    <div class="container">

        {{-- action is pointed to the named route kiosks.store which translates to a POST to /people --}}
        <form method="POST" action="{{ route('kiosks.store') }}">
            @csrf
            <div class="form-group row">
                <label for="location" class="col-3 offset-2 col-form-label text-right">Location</label>
                <div class="col-6">
                    {{--
                        The old('firstname') will holld the value of the field to populate the form if there is an error and
                        you need to fix an error before resubmitting
                    --}}
                    <input id="location" name="location" type="text" value="{{ old('location') }}" class="form-control here">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-3 offset-2 col-form-label text-right">address</label>
                <div class="col-6">
                    <input id="address" name="address" value="{{ old('address') }}" type="text" class="form-control here">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-5 col-6">
                    <button name="submit" type="submit" class="btn btn-primary">Add Kiosks</button>
                </div>
            </div>
        </form>
    </div>
@endsection