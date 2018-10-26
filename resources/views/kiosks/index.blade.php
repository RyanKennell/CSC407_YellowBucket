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

@endsection
