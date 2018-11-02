<!!DOCTYPE html>
<html?
<head>
	<title>Movies</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<script type="text/javascript" src="{{url('js/jquery-3.3.1.js') }}"> </script>
	<script type="text/javascript" src="{{url('js/bootstrap.js') }}"> </script>
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<button class="navbar-toggler" aria-expanded="false" aria-controls="navbarColor01" aria-label="Toggle navigation" type="button" data-target="#navbarColor01" data-toggle="collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Admin</a>
  

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/admin')}}">Admin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{'/create'}}">Create</a>
      </li>
     
     
    </ul>

  </div>
</nav>
