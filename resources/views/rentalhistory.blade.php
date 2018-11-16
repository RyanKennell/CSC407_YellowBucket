@extends('layouts.main')
@section('content')


<div class="container">
	<div class="row">
	<legend>Rental History</legend>
	<div   class="row">
<div   class="col-md-6-lg-6">
	
	<table class="table table-hover ">
	
	</div>
</div>
<thead>
<th scope="col">id</th>
<th scope="col">checkout_time</th>
<th scope="col">checkin_time</th>
<th scope="col">user_id</th>
<th scope="col">disc_id </th>
<th scope="col">created_at</th>
<th scope="col">updated_at</th>
</thead>

<tbody>

   @foreach($rentalhistory as $rentalhistory)
               
<tr>
<td>{{$rentalhistory->id}}</td>
<td>{{$rentalhistory->checkout_time}}</td>
<td>{{$rentalhistory->checkin_time}}</td>
<td>{{$rentalhistory->user_id}}</td>
<td>{{$rentalhistory->disc_id}}</td>
<td>{{$rentalhistory->created_at}}</td>
<td>{{$rentalhistory->updated_at}}</td>
</tr>
   @endforeach 
</tbody>
</table> 


	</div>
</div>

@endsection									

