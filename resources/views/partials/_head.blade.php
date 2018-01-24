    <!-- CSRF Token -->
{{--     <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Tailorshop @yield('title')</title>

{{-- 	<title>{{ config('app.name', 'Tailorshop') }}</title> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/owl.theme.css">
	<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css">


	@yield('stylesheet')

	<link rel="stylesheet" href="/css/jcf.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<link rel="stylesheet" type="/text/css" href="css/flaticon.css">
	<link rel="stylesheet" href="/css/transitions.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/color.css">
	
	<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

{{-- 	  <script>
        window.Tailorshop = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script> --}}


