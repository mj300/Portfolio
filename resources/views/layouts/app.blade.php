<!DOCTYPE html>
<html class='no-js' >
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
		
		<title>2mj - @yield('title')</title>
		
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link rel='stylesheet' type='text/css' href='{{ URL('css/bootstrap.css') }}' >
		
		<link rel='stylesheet' type='text/css' href='{{ URL('css/owl.carousel.css') }}' >
		<link rel='stylesheet' type='text/css' href='{{ URL('css/owl.theme.css') }}' >
		<link rel='stylesheet' type='text/css' href='{{ URL('css/owl.transitions.css') }}' >
		<link rel='stylesheet' type='text/css' href='{{ URL('css/magnific-popup.css') }}' >
		<link rel='stylesheet' type='text/css' href='{{ URL('css/app.css') }}' >
		<link rel='stylesheet' type='text/css' href='{{ URL('css/main.css') }}' >
		<link rel='stylesheet' type='text/css' href='{{ URL('css/default-color.css') }}' >
		
		
	</head>
	
	<body>
		
		@include('tools.loader')
		
		
		
		<!--=============================================================================
			Main Wrapper
		===============================================================================-->
		<div id='wrapper' >

			@yield('content')
			
			
			
			<!--close button-->
			<div class='close-btn' >
				<span></span>
				<span></span>
			</div>
			<!--/close button-->
			
			
		</div>
		<!--=============================================================================
			/Main Wrapper
		===============================================================================-->
		
		
		<!--=============================================================================
			JavaScript Files
		===============================================================================-->
		<script src='{{ URL('js/jquery.min.js')}}' ></script>
		<script src='{{ URL('js/jquery.stellar.min.js')}}' ></script>
		<script src='{{ URL('js/modernizr.js')}}' ></script>
		<script src='{{ URL('js/owl.carousel.min.js')}}' ></script>
		<script src='{{ URL('js/jquery.shuffle.min.js')}}' ></script>
		<script src='{{ URL('js/jquery.magnific-popup.min.js')}}' ></script>
		<script src='{{ URL('js/validator.min.js')}}' ></script>
		<script src='{{ URL('js/smoothscroll.js')}}' ></script>
		<script src='{{ URL('js/app.js')}}' ></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CR7RY7P408"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CR7RY7P408');
</script>
		
		
		
	</body>
	
</html>