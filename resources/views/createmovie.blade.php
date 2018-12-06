@extends('layouts.main')
@section('content')
<div class="container">
	<div class="row">
		@if(count($errors) >0 )
					@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						{{$error}}
					</div>
					@endforeach
					@endif
		<div class="col-12">
		
			<form class="form-horizontal" method="POST" action="{{url('/admin/insert')}}" enctype="multipart/form-date">
				{{csrf_field()}}
				
				<fieldset>
					<legend>Legend</legend>
			
					<div class="form-group">
						<label for="inputEmail"  class="col-2 control-label">Title</label>
						<div class = "col-10">
							<input type="text" name="title" class="form-control" id="
							inputEmail" placeholder="Title">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="InputPassword1" class="col-2 control-label"> 
						Description</label>
						<div class="col-10">
							<textarea name="description"class="form-control" placeholder="Description">
							</textarea>
						</div>
					</div>
					
					
					
					<div class="form-group">
					
					<input type="file" name="coverPhoto">
					</div>
					<div>
					
					
					</div>
	
					
					<div class="form-group">
						<div class="col-10 col-lg-offset-2">
							<button class="btn btn-primary" type="submit">Submit</button>
							<a href="{{'/'}}" class= "btn btn-primary">Back</a>
						</div>
						
						
						
						
					</fieldset>
				</form>
			</div>
		</div>
	</div>
@endsection