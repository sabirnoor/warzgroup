@extends('layouts.wps.layout')@section('content')
<div class="banner"> <img src="{{ asset('public/assets/wps-img/about_banner.jpg') }}" alt="..." class="img-responsive"> </div>
<div class="pencil-bg">
  <div class="container inr-page">
    <div class="col-sm-9 pull-right con-area">
      <h1 class="heading"> About Us<br>
        <img src="{{ asset('public/assets/wps-img/hed-sep.jpg') }}" alt=""> </h1>
      <p> 'Warz Public school established in 2016 with a view to impart value based education to the children of Jalalgarh and its surroundings.<br>
        <br>
        Our main emphasis is to widen and enrich the horizo of the child through a knowledge of the spiritual heritage with opes to the world beyond the school also garners the best traditions from both home and abroad. A patteren of hoist education which aims at all round devlopment.<br>
        <br>
        To Create-awareness in them for the betterment of their society, country and the mother earth itself.<br>
        <br>
        To cross the barriers and move towards the path of lght of knowledge, love and spiritof tolerance. <br>
        <br>
        Warz Public School Convent School is an English Medium co-educational School, situated in Anjuman Masjid Road, Jalalgarh, Purnia, Bihar. </p>
      <p>&nbsp; </p>
    </div>
    <div class="col-sm-3">
      <ul class="side-list">
        <li><a href="{{url('wps/about')}}" class="active">About Us</a></li>
        <li><a href="{{url('wps/discipline')}}">Discipline</a></li>
        <li><a href="{{url('wps/for_better_future')}}">For Better Future</a></li>
        <li><a href="{{url('wps/pledge')}}">Pledge</a></li>
        <li><a href="{{url('wps/time_table_dress_mera_sujhaw')}}">Time Table Dress Mera Sujhaw</a></li>
      </ul>
      <div class="clearfix">&nbsp;</div>
      <div class="col-md-12" style="padding:0;"><img src="{{ asset('public/assets/wps-img/about.jpg') }}" alt="" class="img-responsive"></div>
      <div class="clearfix">&nbsp;</div>
    </div>
  </div>
</div>
</div>
<!-- FOOTER -->
@endsection