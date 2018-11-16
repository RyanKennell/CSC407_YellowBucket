
@section('content')
@include('inc.header')
<div class="container">
	<div class="row">
		<legend>Read Movie</legend>
		<p class="lead">{{$movies->title}}</p>
		</div>
		<div class="row">
		<p>{{$movies->description}}</p>
	</div>
</div>
@include('inc.footer')
