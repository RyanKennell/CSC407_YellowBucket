@extends('layouts.main')
@section('content')


<div class="container">
	<div class="row">
	<legend>User</legend>
	<div   class="row">
<div   class="col-md-6-lg-6">
	
	</div>
</div>
		<table class="table table-hover ">

<thead>
<th scope="col">id</th>
<th scope="col">name</th>
<th scope="col">address</th>
<th scope="col">email</th>
<th scope="col">email_verified_at</th>
<th scope="col">password</th>
</thead>

<tbody>

   @foreach($users as $user)
<tr>
<td>{{$user->id}}</td>
<td>{{$user->name}}</td>
<td>{{$user->address}}</td>
<td>{{$user->email}}</td>
<td>{{$user->email_verified_at}}</td>
<td>{{$user->password}}</td>
</tr>
   @endforeach 
</tbody>
</table> 


	</div>
</div>

@endsection									

