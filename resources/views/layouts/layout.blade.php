<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="WARZ Group">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="Best computer center in seemanchal, Health group, best school in seemanchal.cheap and best education system., play school">
    <meta name="keywords" content="School,Computer classes,Education Trust,Enginnering, Social work,NGO,Health, Medical, construction, real estate">
    <link rel="icon" href="{{ asset('public/assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
</head>
<body>
    <div>
        @include('layouts.header')
            @yield('content')
        @include('layouts.footer')
    </div>
    <script src="{{ asset('public/assets/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('public/assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('public/assets/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('public/assets/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
	
    <!-- <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>-->
	
    <!-- swiper js -->
    <script src="{{ asset('public/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/waypoints.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
    <script>
    $('#myBtn').click(function(){
        var btnText = $(this).text();
        if (btnText === "Read more") {
            //$('#more').show('slow');
            $(this).html('Read less');
        }
    });
        function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        
        if (dots.style.display === "none") {
            //dots.style.display = "inline";
            btnText.innerHTML = "Read more"; 
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less"; 
            //moreText.style.display = "inline";
        }
        }
        </script>

</body>
</html>
