<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acme</title>
	<link rel="stylesheet" href="http://delltop:8888/public/dellassets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<style>
		#footer{
			margin-top: 30px;
			padding: 20px;
			color: #fff;
			background: #333;
		}
	</style>
</head>
<body>
	@include('inc.navbar')

	<div class="container">

		@if(Request::is('/'))
			@include('inc.showcase')
		@endif

		<div class="row">
			<div class="col-md-8">			
				@include('inc.messages')

				@yield('content')		
			</div>
			<div class="col-md-4">

				@include('inc.sidebar')		

			</div>
		</div>
	</div>
	<!-- /.container -->

	<footer id="footer" class="text-center">
		<p>Copyright 2017 &copy; Acme</p>
	</footer>


	<script src="http://delltop:8888/public/dellassets/jquery/jquery-2.1.4.min.js"></script>
	<script src="http://delltop:8888/public/dellassets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>