@extends('layouts.app')

<!--Author @ Ryan Kennell-->

@section('content')

    <div class="bg-info">
        <div class="mb-3 p-2">
            <div class="text-center text-white">
                <h2> Newest Movies </h2>
            </div>
        </div>
    </div>

    <div class="row">

    @for ($i = 0; $i < count($movies); $i++)
        @if($i % 6 == 0)
            </div>
            <div class="row">
        @endif

         <div class="pt-3 col-lg-2 text-center" >
            <div class="">
                <a href="http://csc407dev.com/movies/{{ $movies[$i]['id'] }}">
                    <img border="5" alt="cover photo" src="/images/{{$movies[$i]['coverPhoto'] }}" width="150" height="250">
                </a>
                <div class="shadow-lg">
                    <h3>{{ $movies[$i]['title'] }}</h3>
                    @if(strlen($movies[$i]['description']) > 250)
                        <p> {{ substr($movies[$i]['description'], 0, 250) }}</p>
                    @else
                        <p> {{ $movies[$i]['description'] }}</p>
                    @endif
                </div>
            </div>
         </div>
    @endfor

    </div>

    <!-- Footer -->
    <footer class="page-footer bg-info">
            <div class="footer-copyright text-center py-3">© 2018 Copyright: YellowBucket Corporation</div>
    </footer>

@endsection
