<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}">
	<meta name="Cửa Hàng Nhom Kính Khung Cửa Hàng Đầu Việt Nam" content="">
	<meta name="House Door" content="">

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
    <!-- <script src="https://uhchat.net/code.php?f=8628f2"></script> -->

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a03bc77bbcbd1001145780f&product=sticky-share-buttons"></script>
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
   fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<style>
   #cfacebook{position:fixed;bottom:38px;right:20px;z-index:99;width:260px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}
   #cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}
   #cfacebook .fchat .fb-page{margin-top:-5px;float:left;}
   #cfacebook a.chat_fb{float:left;padding:0 25px;width:260px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}
   #cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}
   .fchat span{ width:260px!important;}
</style>
<script>
   jQuery(document).ready(function () {
   jQuery(".chat_fb").click(function() {
   jQuery('.fchat').toggle('slow');
   });
   });
</script>
<div id="cfacebook">
   <a href="javascript:;" class="chat_fb" onClick="return:false;"><i class="fa fa-facebook-square"></i> Chat với chúng tôi</a>
   <div class="fchat">
      <div style="width:250px;" class="fb-page"
         data-href="/https://www.facebook.com/nhomkinhgovap"
         data-tabs="messages"
         data-width="260"
         data-height="280"
         data-small-header="true">
         <div class="fb-xfbml-parse-ignore">
            <blockquote></blockquote>
         </div>
      </div>
   </div>
</div>
</div>

</body>

</html>