@extends('layouts.app')

<!--Author @ Brandon LaGorga-->
@section('content')
    <div class="bg-info">
        <div class="pt-3 text-center card-title text-white">
            <h1>{{$kiosks['location']}}</h1>
            <h4>{{ $kiosks['address'] }}</h4>
            <h3> Movies List </h3>
        </div>
    </div>



    <footer class="page-footer bg-info">
        <div class="footer-copyright text-center py-3">© 2018 Copyright: YellowBucket Corporation</div>
    </footer>

@endsection