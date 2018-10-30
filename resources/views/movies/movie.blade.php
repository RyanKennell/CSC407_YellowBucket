@extends('layouts.app')

@section('content')

    <h1> Movies List </h1>

    <div class="row">
    @for ($i = 0; $i < count($movies); $i++)
        @if($i % 5 == 0)
            </div>
            <div class="row">
        @endif

         <div class="col-1 m-3" >
            <h3>{{ $movies[$i]['title'] }}</h3>
             <a href="http://csc407dev.com/Movies/{{ $movies[$i]['id'] }}">
                 <img border="0" alt="cover photo" src="/images/{{$movies[$i]['coverPhoto'] }}" width="100" height="100">
             </a>
         </div>
    @endfor
    </div>
@endsection
