<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @php $gtext = gtext(); @endphp
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title') | {{ $gtext['site_title'] }}</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ $gtext['favicon'] ? asset('media/'.$gtext['favicon']) : asset('backend/images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ $gtext['favicon'] ? asset('media/'.$gtext['favicon']) : asset('backend/images/favicon.ico') }}" type="image/x-icon">
    <!-- CSS -->
	<style type="text/css">
	:root {
	  --backend-theme-color: {{ $gtext['backend_theme_color'] }};
	}
	</style>
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
	{{-- <link href="{{asset('frontend/lib/animate/animate.css')}}" rel="stylesheet"> --}}
	{{-- <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet"> --}}
	<link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> --}}
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	@stack('style')
  </head>
  <body>
	@yield('content')
    <!-- JS -->
	<script src="{{asset('backend/js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{asset('backend/js/popper.min.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	@stack('scripts')
  </body>
</html>