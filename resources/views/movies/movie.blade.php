@extends('layouts.app')

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

         <div class="col-lg-2 text-center border-0" >
            <div class="img-thumbnail">
                <a href="http://csc407dev.com/Movies/{{ $movies[$i]['id'] }}">
                    <img border="5" alt="cover photo" src="/images/{{$movies[$i]['coverPhoto'] }}" width="150" height="250">
                </a>
                <div class="caption">
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

@endsection
