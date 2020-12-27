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
    <?php if($controller[1]=='registration'){ ?>
        <title>Registration</title>
    <?php }else{ ?>
        <title>उज्ज्वल भविष्य शिछण केंद्र</title>
    <?php } ?>

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
    
    <style>




    .navbarhome {
        margin-bottom: 20px;
    }
    .navbarhome .navbar{
        padding: 0px !important;
    }
    .navbarhome .bg-light {
        background-color: #0099ff!important;
    }
    .navbarhome .nav-item{
        padding: 5px 23px !important;
    }
    .navbarhome .nav-item:hover{
        background: #fecb32 !important;
    }
    .navbarhome .nav-item:hover a{
        color: #fff !important;
    }
    .navbarhome .nav-item a{
        font-size: 15px !important;
        color: #fff !important;
        
    }
    
    
    .holder { 
        background-color:#ccc;
        width:300px;
        height:295px;
        overflow:hidden;
        padding:10px;
        font-family:Helvetica;
        }
        .holder .mask {
        position: relative;
        left: 0px;
        top: 10px;
        width:300px;
        height:240px;
        overflow: hidden;
        }
        .holder ul {
        list-style:none;
        margin:0;
        padding:0;
        position: relative;
        }
        .holder ul li {
        padding:10px 0px;
        }
        .holder ul li a {
        color:darkred;
        text-decoration:none;
        }

        /*jssor slider loading skin double-tail-spin css*/
        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 031 css*/
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
        .jssorb031 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
	<script>
            var site_url = "{!! url('/') !!}";
        </script>
</head>
<body>
    <div>
        @include('layouts.ubsk.header')
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
    <script src="{{ asset('public/assets/js/jssor.slider-28.0.0.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
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


<?php if ($controller[1] == 'registration') {?>
<script>
$(window).load(function() {
    // page is fully loaded, including all frames, objects and images    
	show_address_fields();
});	

$('#post_applied_for').on('change',function(){
    show_address_fields();
});

function show_address_fields(){
	if( $('#post_applied_for').val()==="Tola Teacher(T.T)"){
			
			$("#applying_ward_div").show();
			$("#applying_panchayat_div").show();
			$("#applying_block_div").show();
			$("#applying_district_div").show();
			
			$("#applying_ward").attr('required','true');
			$("#applying_panchayat").attr('required','true');
			$("#applying_block").attr('required','true');
			$("#applying_district").attr('required','true');
			

			$("#exam_passed2").removeAttr('required');
			$("#board_or_university2").removeAttr('required');
			$("#appeared_or_passed2").removeAttr('required');
			$("#passed_year2").removeAttr('required');
			$("#marks2").removeAttr('required');
			$("#marksheet2").removeAttr('required');
			
			
			$("#exam_passed3").removeAttr('required');
			$("#board_or_university3").removeAttr('required');
			$("#appeared_or_passed3").removeAttr('required');
			$("#passed_year3").removeAttr('required');
			$("#marks3").removeAttr('required');
			$("#marksheet3").removeAttr('required');
			
        }
		if( $('#post_applied_for').val()==="Panchayat Coordinator(P.C.)"){
			
			$("#applying_ward_div").hide();
			$("#applying_panchayat_div").show();
			$("#applying_block_div").show();
			$("#applying_district_div").show();
			
			$("#applying_ward").removeAttr('required');
			$("#applying_panchayat").attr('required','true');
			$("#applying_block").attr('required','true');
			$("#applying_district").attr('required','true');
			
			$("#exam_passed2").attr('required','true');
			$("#board_or_university2").attr('required','true');
			$("#appeared_or_passed2").attr('required','true');
			$("#passed_year2").attr('required','true');
			$("#marks2").attr('required','true');
			$("#marksheet2").attr('required','true');
			
			$("#exam_passed3").removeAttr('required');
			$("#board_or_university3").removeAttr('required');
			$("#appeared_or_passed3").removeAttr('required');
			$("#passed_year3").removeAttr('required');
			$("#marks3").removeAttr('required');			
			$("#marksheet3").removeAttr('required');			
			
        }
		if( $('#post_applied_for').val()==="Block Coordinator(B.C.)"){
			$("#applying_ward_div").hide();
			$("#applying_panchayat_div").hide();
			$("#applying_block_div").show();
			$("#applying_district_div").show();
			
			$("#applying_ward").removeAttr('required');
			$("#applying_panchayat").removeAttr('required');
			$("#applying_block").attr('required','true');
			$("#applying_district").attr('required','true');
			
			$("#exam_passed2").attr('required','true');
			$("#board_or_university2").attr('required','true');
			$("#appeared_or_passed2").attr('required','true');
			$("#passed_year2").attr('required','true');
			$("#marks2").attr('required','true');
			$("#marksheet2").attr('required','true');
			
			$("#exam_passed3").attr('required','true');
			$("#board_or_university3").attr('required','true');
			$("#appeared_or_passed3").attr('required','true');
			$("#passed_year3").attr('required','true');
			$("#marks3").attr('required','true');
			$("#marksheet3").attr('required','true');
        }
		
		if( $('#post_applied_for').val()==="District Coordinator(D.C.)"){
			
			$("#applying_ward_div").hide();
			$("#applying_panchayat_div").hide();
			$("#applying_block_div").hide();
			$("#applying_district_div").show();
			
			$("#applying_ward").removeAttr('required');
			$("#applying_panchayat").removeAttr('required');
			$("#applying_block").removeAttr('required');
			$("#applying_district").attr('required','true');
			
			$("#exam_passed2").attr('required','true');
			$("#board_or_university2").attr('required','true');
			$("#appeared_or_passed2").attr('required','true');
			$("#passed_year2").attr('required','true');
			$("#marks2").attr('required','true');
			$("#marksheet2").attr('required','true');
			
			$("#exam_passed3").attr('required','true');
			$("#board_or_university3").attr('required','true');
			$("#appeared_or_passed3").attr('required','true');
			$("#passed_year3").attr('required','true');
			$("#marks3").attr('required','true');
			$("#marksheet3").attr('required','true');
        }
}

$(document).on("change", "#applying_district", function (e) { 
        //e.preventDefault();
        var district_id = $('#applying_district').val(); 
        

        $.ajax({
            url: site_url + '/get-district-blocks',
            type: 'POST',
            data: {district_id: district_id},
            dataType: 'json',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            beforeSend: function () {
                $('.loader_data').html('<div class="loading">Loading&#8230;</div>');
            },
            success: function (result) {
                if (result) {  //alert(result);
                    
					var HTML = '';
                    HTML += '<option value="">--Select--</option>';
                    $.each(result.data, function (i, item) {
                        if(!item.name){item.name='N/A';}
						
						HTML += '<option value="' + item.id + '">' + item.name +'</option>'; 
                    });
                    $('#applying_block').html(HTML); 
                    
                    $('.loader_data').html('');

                }else{
                    var HTML = '';
                    HTML += '<option value="">--Select--</option>';
                    $('#applying_block').html(HTML);
                    
                }

            },
            error: function (result) {
                $('.loader_data').html('');
            }

        });

    });
</script>
<?php }?>
</body>
</html>
