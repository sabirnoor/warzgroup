@extends('layouts.wps.layout')@section('content')   
    <!-- banner
    ================================================== -->
<div class="banner">
  <img src="img/about_banner.jpg" alt="..." class="img-responsive">
</div>
<div class="pencil-bg">
  <div class="container inr-page">
    <div class="col-sm-9 pull-right con-area">
      <h1 class="heading">
       Photo Gallery <br>
        <img src="img/hed-sep.jpg" alt="">
      </h1>
    
    <div class="gallery1">
           
            <ul class="img-sec" id="lightgallery">
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga1-b.jpg" data-sub-html=''><a href=""><img src="img/ga1.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga2-b.jpg" data-sub-html=''><a href=""><img src="img/ga2.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga3-b.jpg" data-sub-html=''><a href=""><img src="img/ga3.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga4-b.jpg" data-sub-html=''><a href=""><img src="img/ga4.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga5-b.jpg" data-sub-html=''><a href=""><img src="img/ga5.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga6-b.jpg" data-sub-html=''><a href=""><img src="img/ga6.jpg" alt=""></a></li>
              
              
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga7-b.jpg" data-sub-html=''><a href=""><img src="img/ga7.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga8-b.jpg" data-sub-html=''><a href=""><img src="img/ga8.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/ga9-b.jpg" data-sub-html=''><a href=""><img src="img/ga9.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/g10-b.jpg" data-sub-html=''><a href=""><img src="img/g10.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/g11-b.jpg" data-sub-html=''><a href=""><img src="img/g11.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/g12-b.jpg" data-sub-html=''><a href=""><img src="img/g12.jpg" alt=""></a></li>
              <li data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/g13-b.jpg" data-sub-html=''><a href=""><img src="img/g13.jpg" alt=""></a></li>
              
              
            </ul>
          </div>

      <p>&nbsp;
        
      </p>

     
    </div>
    <div class="col-sm-3">
      <ul class="side-list">
      
      
      
    
                   <li><a href="{{url('wps/photo_gallery')}}" class="active">Photo Gallery </a></li>
                    <li><a href="{{url('wps/video_gallery')}}">Vedo Gallery </a></li>           
        <li><a href="{{url('wps/campus_tours')}}">Campus Tours  </a></li>
      
      
      
      
      
      
      
      
        
      </ul>
      <div class="clearfix">&nbsp;</div>
      <div class="col-md-12" style="padding:0;"><img src="img/about.jpg" alt="" class="img-responsive"></div>
       <div class="clearfix">&nbsp;</div>
    </div>
  </div>
</div>
<!-- FOOTER -->@endsection