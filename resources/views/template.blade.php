<!DOCTYPE html>
<html>
	<head>
		<title>Template</title>
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
	</head>
	<body>	
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		  <a class="navbar-brand" href="#">Handika M.P.G</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      
			      <li class="nav-item">
			        <a class="nav-link" href="#">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Profile</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Gallery</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">News</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">About us</a>
			      </li>
			  </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
		</div>
			<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
			<script type="text/javascript" src="{{ url('js/fontawesome-all.min.js') }}"></script>
	
	</body>

</html>