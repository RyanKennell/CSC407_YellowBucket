@extends('layouts.main')
@section('content')
<div class="container">
	<div class="row">
		<legend>Read Movie</legend>
		<p class="lead">{{$movies->title}}</p>
		</div>
		<div class="row">
		<p>{{$movies->coverPhoto}}</p>
	</div>
		<div class="row">
		<p>{{$movies->description}}</p>
	</div>
	
</div>

@endsection