<?php
$action = Route::currentRouteAction();
$class_basename = (class_basename($action));
$controller = explode('@', $class_basename);
//echo '<pre>';print_r($controller);die;
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="WARZ Group">
     <title>Warz Public School</title>

    <meta name="description" content="Best computer center in seemanchal, Health group, best school in seemanchal.cheap and best education system., play school">
    <meta name="keywords" content="School,Computer classes,Education Trust,Enginnering, Social work,NGO,Health, Medical, construction, real estate">
    
    <link rel="icon" type="image/ico" href="{{ asset('public/assets/wps-img/favicon.png') }}">
    
<!-- Bootstrap core CSS -->

<link href="{{ asset('public/assets/wps-css/bootstrap.min.css') }}" rel="stylesheet">
<!-- custom style css -->
<link href="{{ asset('public/assets/wps-css/scss.css') }}" rel="stylesheet">

<!-- plugin css -->
<link href="{{ asset('public/assets/wps-css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets/wps-css/lightgallery.css') }}" rel="stylesheet">
    
	
    <style>

		
    </style>
	<script>
            var site_url = "{!! url('/') !!}";
        </script>
</head>
<body>
    
        @include('layouts.wps.header')
            @yield('content')
        @include('layouts.wps.footer')
    
	
    
<script src="{{ asset('public/assets/wps-js/jquery.min.js') }}"></script> 

<script src="{{ asset('public/assets/wps-js/bootstrap.min.js') }}"></script> 

<script src="{{ asset('public/assets/wps-js/shine.js') }}"></script> 

<script src="{{ asset('public/assets/wps-js/lightgallery.js') }}"></script> 

<script src="{{ asset('public/assets/wps-js/bootstrap-dropdownhover.min.js') }}"></script> 

<script type="text/javascript">

      $(document).ready(function(){

          $('#lightgallery').lightGallery();

      });

    </script> 

<script type="text/javascript" src="wps-js/jquery.vticker-min.js"></script> 

<script type="text/javascript">

$(function(){

	$('#news-container').vTicker({ 

		speed: 500,

		pause: 3000,

		animation: 'fade',

		mousePause: false,

		showItems: 2

	});

        $('#news-container1').vTicker({

		speed: 700,

		pause: 4000,

		animation: 'fade',

		mousePause: false,

		showItems: 2

	});

});

</script>
    
    <script>
    jQuery.fn.liScroll = function(settings) {
        settings = jQuery.extend({
            travelocity: 0.05
            }, settings);		
            return this.each(function(){
                var $strip = jQuery(this);
                $strip.addClass("newsticker")
                var stripHeight = 1;
                $strip.find("li").each(function(i){
                    stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
                });
                var $mask = $strip.wrap("<div class='mask'></div>");
                var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
                var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
                $strip.height(stripHeight);			
                var totalTravel = stripHeight;
                var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
                function scrollnews(spazio, tempo){
                $strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
                }
                scrollnews(totalTravel, defTiming);				
                $strip.hover(function(){
                jQuery(this).stop();
                },
                function(){
                var offset = jQuery(this).offset();
                var residualSpace = offset.top + stripHeight;
                var residualTime = residualSpace/settings.travelocity;
                scrollnews(residualSpace, residualTime);
                });			
            });	
    };

    $(function(){
        $("ul#ticker01").liScroll();
    });
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

<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:500,d:1000,x:0,e:{x:6}}],
              [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
              [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
              [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
              [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
              [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
              [{b:600,d:1000,o:0.4}],
              [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
              [{b:800,d:1000,o:0.4}],
              [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
              [{b:0,d:1000,o:1,p:{o:{o:4}}}],
              [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <script type="text/javascript">
    jssor_1_slider_init();
    </script>

</body>

</html>
