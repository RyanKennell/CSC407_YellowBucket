@extends('layouts.app')

@section('content')

    <h1> Movies List </h1>

    <table class="table">
        <thead>
        <tr>
            <th> title       </th>
            <th> rating      </th>
            <th> length      </th>
            <th> genreID     </th>
            <th> description </th>
            <th> onDVD       </th>
            <th> onBlueRay   </th>
            <th> coverPhoto  </th>
        </tr>
        </thead>

        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['rating'] }}</td>
                <td>{{ $movie['length'] }}</td>
                <td>{{ $movie['genreID'] }}</td>
                <td>{{ $movie['description'] }}</td>
                <td>{{ $movie['onDVD'] }}</td>
                <td>{{ $movie['onBlueRay'] }}</td>
                <td><img src="/images/{{$movie['coverPhoto'] }}" alt="Cover Picture" height="100" width="100"></td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endsection
