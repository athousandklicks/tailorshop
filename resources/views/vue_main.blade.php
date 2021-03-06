<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
	@include('partials._head')
</head>

<body>
	<div id="app">
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
	</div>
		<!-- Wrapper End -->
		<script src="{{ asset('js/app.js') }}"></script>
		@include('partials._javascript')

		@yield('scripts')

</body>

</html>