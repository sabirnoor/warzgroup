<?php
$action = Route::currentRouteAction();
$class_basename = (class_basename($action));
$controller = explode('@', $class_basename);
//echo '<pre>';print_r($controller);die;
?>
<div class="navbar-wrapper">

  <nav class="navbar navbar-inverse navbar-static-top">

    <div class="container">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

        <a class="navbar-brand peShiner desktop-logo" href="{{url('wps/index')}}">

        <canvas></canvas>

        <img src="{{ asset('public/assets/wps-img/logo.png') }}" alt="logo" title=""> </a> <a class="navbar-brand mobile-logo" href="{{url('wps/index')}}"> <img src="{{ asset('public/assets/wps-img/logo.png') }}" alt="logo" title=""> </a> </div>

      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-right top-ico-ul">

          <li><a href="#" class="in-circle"><img src="{{ asset('public/assets/wps-img/kidsZons.png') }}" alt="logo" title=""></a></li>

        </ul>

        <div class="clearfix"></div>

        <ul class="nav navbar-nav main-nav">

              <li class="dropdown">

                  <a href="{{url('wps/about')}}" class="dropdown-toggle about" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About School <span class="caret"></span></a>

                  <ul class="dropdown-menu drop-m">

                  <li><a href="{{url('wps/about')}}">About Us</a></li> 
                    <li><a href="{{url('wps/discipline')}}">Discipline</a></li>

                    <li><a href="{{url('wps/for_better_future')}}">For Better Future</a></li>

                    <li><a href="{{url('wps/pledge')}}">Pledge</a></li>

                    <li><a href="{{url('wps/time_table_dress_mera_sujhaw')}}">Time Table Dress Mera Sujhaw</a></li>

                  </ul>

                </li>

                        

                <li>  <a href="{{url('wps/rules_regulations')}}" class="rule">Rules & Regulations </a>   </li>

                <li><a href="{{url('wps/facilities')}}" class="facilities">Facilities</a></li>                

                <li><a href="{{url('wps/activities')}}" class="activities">Activities </a></li>

                <li><a href="{{url('wps/kindergarten')}}" class="kindergarten">Kindergarten</a></li>

                 <li><a href="{{url('wps/parents')}}" class="parents">Parents</a></li>

                <li><a href="{{url('wps/results')}}" class="results">Results </a></li>                

                <li><a href="{{url('wps/contact')}}" class="contact">Contact</a></li>

              </ul>

      </div>

    </div>

  </nav>

</div>