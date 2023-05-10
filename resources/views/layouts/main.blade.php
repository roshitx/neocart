<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Modern Minimal Shop - Neoncart HTML5 Template</title>
	<link rel="shortcut icon" href="assets/images/logo/favourite_icon_01.png">

	<!-- fraimwork - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- icon - css include -->
	<script src="https://kit.fontawesome.com/024c1ae29f.js" crossorigin="anonymous"></script>

	<!-- animation - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

	<!-- nice select - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">

	<!-- carousel - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">

	<!-- popup images & videos - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">

	<!-- jquery ui - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">

	<!-- custom - css include -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<body class="home_minimal">
	@include('components.navbar')
	@include('components.back_to_top')
	@include('components.sidebar')
	
	@yield('content')

	@include('components.quick_view')
	@include('components.footer')
	<!---======== SCRIPT JS ========--->
	<!-- fraimwork - jquery include -->
	<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	<!-- mobile menu - jquery include -->
	<script src="{{ asset('js/mCustomScrollbar.js') }}"></script>

	<!-- google map - jquery include -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
	<script src="{{ asset('js/gmaps.min.js') }}"></script>

	<!-- animation - jquery include -->
	<script src="{{ asset('js/parallaxie.js') }}"></script>
	<script src="{{ asset('js/wow.min.js') }}"></script>

	<!-- nice select - jquery include -->
	<script src="{{ asset('js/nice-select.min.js') }}"></script>

	<!-- carousel - jquery include -->
	<script src="{{ asset('js/slick.min.js') }}"></script>

	<!-- countdown timer - jquery include -->
	<script src="{{ asset('js/countdown.js') }}"></script>

	<!-- popup images & videos - jquery include -->
	<script src="{{ asset('js/magnific-popup.min.js') }}"></script>

	<!-- filtering & masonry layout - jquery include -->
	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>

	<!-- jquery ui - jquery include -->
	<script src="{{ asset('js/jquery-ui.js') }}"></script>

	<!-- custom - jquery include -->
	<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
