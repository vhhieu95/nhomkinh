<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
     {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css"> --}}
     {{-- <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
	<!-- Owl Carousel Assets -->
	<link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/css/owl.transitions.css') }}" rel="stylesheet">

	<!-- Flexslider CSS -->
	<link href="{{ asset('frontend/css/flexslider.css') }}" rel="stylesheet">
    <!-- bxslider -->
    <link href="{{ asset('frontend/css/jquery.bxslider.css') }}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{ asset('frontend/css/main_style.css') }}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{ asset('frontend/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</head>

<body>
	<!-- Navigation -->
	@include('frontend.layouts.partials.header')

	<!-- Page Content -->
	@yield('content')

	<!-- Footer -->
	@include('frontend.layouts.partials.footer')

	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>

	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

	<!-- Owl Carousel JavaScript -->
	<script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

	<!-- Flexslider JavaScript -->
	<script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>
    <!-- BX Slider -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.bxslider.min.js') }}"></script>

    
    <script src="{{ asset('frontend/js/jquery.bootstrap.newsbox.min.js') }}" type="text/javascript"></script>
    <script src="https://uhchat.net/code.php?f=8628f2"></script>
	


</body>

</html>