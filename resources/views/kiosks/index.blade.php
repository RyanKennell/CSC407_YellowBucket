@extends('layouts.app')

@section('content')

    <h1>Kiosks List</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Location</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kiosks as $kiosks)

            <tr>
                <td>{{ $kiosks['location'] }}</td>
                <td>{{ $kiosks['address'] }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
    <form method="CREATE" action="{{ route('kiosks.create') }}">
    <div class="form-group row">
        <div class="col-xs-offset-4 col-xs-8">
            <button name="submit" type="submit" class="btn btn-primary">add to Kiosks</button>
        </div>
    </div>
    </form>
@endsection
