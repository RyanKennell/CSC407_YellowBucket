@extends('layouts.app')

<!--Author @ Brandon LaGorga-->
@section('content')
    <div class="bg-info">
        <div class="pt-3 text-center card-title text-white">
            <h1>{{$data[0]['location']}}</h1>
            <h4>{{$data[0]['address']}}</h4>
            <h3> Movies List </h3>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Copies</th>
            <th>Movies</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data[0]['copies'] }}</td>
                <td>{{ $data[0]['movie_id'] }}</td>
            </tr>
        </tbody>
    </table>

    <footer class="page-footer bg-info">
        <div class="footer-copyright text-center py-3">© 2018 Copyright: YellowBucket Corporation</div>
    </footer>

@endsection