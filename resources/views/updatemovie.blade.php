@extends('layouts.main')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" method="POST" action="{{url('/admin/edit', array($movies->id))}}">
				{{csrf_field()}}
				<fieldset>
					<legend>Legend</legend>
					@if(count($errors) >0 )
					@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						{{$error}}
					</div>
					@endforeach
					@endif
					<div class="form-group">
						<label for="inputEmail"  class="col-lg-2 control-label">Title</label>
						<div class = "col-10">
							<input type="text" name="title" class="form-control" id="
							inputEmail" value="<?php echo $movies->title; ?>" placeholder="Title">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="InputPassword" class="col-2 control-label"> 
						Description</label>
						<div class="col-10">
							<textarea name="description"class="form-control" 
							placeholder="Description"><?php echo $movies->
								description; ?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-lg-10 col-offset-2">
							<button class="btn btn-primary" type="submit">Update</button>
							<a href="{{'/admin'}}" class= "btn btn-primary">Back</a>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
@endsection