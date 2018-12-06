@extends('layouts.main')
@section('content')
<div   class="container">
<div   class="row">
<legend>Legend</legend>
<div   class="row">
<div   class="col-md-6-lg-6">
@if(session('info'))
<div   class="alert alert-success">
{{session('info')}}
</div>
@endif
</div>
</div>
<table class="table table-hover">
<thead>

<th scope="col">id</th>
<th scope="col">title</th>
<th scope="col">rating</th>
<th scope="col">length</th>
<th scope="col">genreID</th>
<th scope="col">description</th>
<th scope="col">onDVD</th>
<th scope="col">onBlueRay</th>
<th scope="col">coverPhoto</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
@if(count($movies) > 0)
@foreach($movies->all() as $movies)
				
<tr>
<td>{{$movies->id}}</td>
<td>{{$movies->title}}</td>
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
<td>{{$movies->description}}</td>
<td>Column content</td>
<td>Column content</td>
<td>{{$movies->coverPhoto}}</td>
<td>
<a href='{{ url("/admin/read/{$movies->id}")}}''
class= "btn btn-primary">Read</a> |
<a href='{{ url("/admin/update/{$movies->id}")}}''
class="btn btn-success">Update</a> |
						
<a href='{{ url("/admin/delete/{$movies->id}")}}''
class="btn btn-danger">Delete</a> |
						
						
</td>
</tr>
@endforeach
@endif
</tbody>
</table> 
		
</div>
</div>


@endsection									
