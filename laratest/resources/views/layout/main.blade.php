<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>

	@yield('nav')

	<div class="main">
		
		@yield('content1')

	</div>
	<footer>
		<p>copyright @ 2020</p>
	</footer>
</body>
</html>