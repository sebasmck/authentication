<html>
	<head>
		<meta charset="UTF-8">
		<title>Custom Login</title>


		<link rel="stylesheet"  href="{{ URL::asset('css/app.css') }}">
	</head>
	<body>

		@if(session()->has('flash'))

			<div class="alert alert-danger">{{ session('flash') }}</div>

		@endif

		
		<div class="container">
			<hr>
			@yield('content')
		</div>

	</body>
</html>