@extends('layouts.wps.layout')@section('content')
<!-- banner
    ================================================== -->
<div class="banner"> <img src="img/about_banner.jpg" alt="..." class="img-responsive"> </div>
<div class="pencil-bg">
  <div class="container inr-page">
    <div class="col-sm-9 pull-right con-area">
      <h1 class="heading"> Contact Us<br>
        <img src="img/hed-sep.jpg" alt=""> </h1>
      <div>
        <p>
        <h5 align="center" style="line-height:36px;">Anjuman Masjid Road, Jalalgarh Purnia  Bihar - 854327</h5>
        </p>
        <div class="clearfix">&nbsp;</div>
        <div class="col-sm-4" align="center"><img alt="phone" src="img/phone.png"><br>
          <strong>Phone No.</strong> <br>
          +91 90975 66878 </div>
        <div class="col-sm-4" align="center"><img alt="phone" src="img/email-c.png"> <br>
          <strong>Email</strong> <br>
          <a href="mailto:info@warzpublicschool.com  ">info@warzpublicschool.com </a></div>
        <div class="col-sm-4" align="center"><img alt="phone" src="img/web.png"> <br>
          <strong>Website URL</strong> <br>
          <a target="_blank" href="http://warzpublicschool.com/">warzpublicschool.com </a></div>
        <div class="clearfix">&nbsp;</div>
      </div>
      <div class="clearfix">&nbsp;</div>
      <div class="col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5073.198404585561!2d87.5277609593316!3d25.958429582393237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eff58fccefeca3%3A0x462b821b310afca0!2sWARZ%20Public%20School%20Jaalgarh!5e0!3m2!1sen!2sin!4v1589445343309!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      
        
      </div>
      
      <!--<div class="wwd">
        <div class="col-md-6 col-sm-6 text-center set">
          <figure><img src="img/ww-1.png" alt=""></figure>
          <h3>Our Vision</h3>
          <p>
           Fatima Convent School is open to all students of all caste and creed and it holds up to them sublime motto: "LOVE, SACRIFICE, SERVICE" we realise that the future of our nation depends on the moral strength of our youth and hence every effort is made to give our students a sound and all round education in keeping with the Nation's aspirations and to make them morally, physically and mentally fit to become active, useful and worth citizens of our dear Motherland.
          </p>
        </div>
        <div class="col-md-6 col-sm-6 text-center set">
          <figure><img src="img/ww-6.png" alt=""></figure>
          <h3>Our Mission</h3>
          <p>
            Fatima Convent School is open to all students of all caste and creed and it holds up to them sublime motto: "LOVE, SACRIFICE, SERVICE" we realise that the future of our nation depends on the moral strength of our youth and hence every effort is made to give our students a sound and all round education in keeping with the Nation's aspirations and to make them morally, physically and mentally fit to become active, useful and worth citizens of our dear Motherland.
          </p>
        </div>
        
        
        
        

      </div>--> 
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
      <div class="col-md-12" style="padding:0;"><img src="img/about.jpg" alt="" class="img-responsive"></div>
      <div class="clearfix">&nbsp;</div>
    </div>
  </div>
</div>
<!-- FOOTER -->
@endsection