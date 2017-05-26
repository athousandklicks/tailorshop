<!DOCTYPE html>
<html lang="en">

	<head>
		@include('partials._head')
	</head>

	<body class="home">

	<!-- Wrapper Start -->
	<div id="wrapper">

		<header id="header" class="haslayout">
			@include('partials._nav')
		</header>

		<div class="banner haslayout">
			@yield('slider')
		</div>

		<div id="main">
			@yield('content')
		</div>

		<footer id="footer" class="footer haslayout">
			@include('partials._footer')
		</footer>

	</div>
	<!-- Wrapper End -->

		@include('partials._javascript')

		@yield('scripts')
		
	</body>
	
</html>