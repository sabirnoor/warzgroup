@extends('layouts.wps.layout')
@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 

  

  <!-- Indicators --> 

  

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">

    <div class="item active"> <img src="{{ asset('public/assets/wps-img/banner.jpg') }}" alt="..."> </div>

    <div class="item"> <img src="{{ asset('public/assets/wps-img/banner1.jpg') }}" alt="..."> </div>

  </div>

  

  <!-- Controls --> 

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

<!-- /.carousel --> 

<div class="notice-section-count ">

  <div class="container notice-section-pdd">

    <div class="notice-section">

      <div class="notice-event">

        <h1>News & <span>Events</span></h1>

        <h5>Update</h5>

      </div>

      <div class="notice-event-count">

        <div style="overflow: hidden; position: relative; height: 114px;" id="news-container">

          <ul style="position: absolute; margin: 0pt; padding: 0pt; top: 0px;">

            <li>

              <div>

                <div class="notice-event-scroller">

                  <p> Entrance Test Timetable for New Admission 2020-21 Started..... </p>

                </div>

              </div>

            </li>

            <li>

              <div>

                <div class="notice-event-scroller">

                  <p> <b>Students are requested to submit their...</b><br>

                    School Timings for New Academic Year School Timings for New Academic Year will be as follows: </p>

                </div>

              </div>

            </li>

          </ul>

        </div>

      </div>

      <div class="notice-payment"> <a href="{{url('wps/parents')}}"><img src="{{ asset('public/assets/wps-img/wps-img/parent-visiting.png') }}" alt="" title="" border="0" ></a> <a href="careers{{url('wps/index')}}"><img src="{{ asset('public/assets/wps-img/wps-img/careers.png') }}" alt="" title="" border="0" ></a> <a href="online_payment{{url('wps/index')}}"><img src="{{ asset('public/assets/wps-img/wps-img/online-payment.png') }}" alt="" title="" border="0" ></a> </div>

    </div>

  </div>

</div>

<!-- notice board --> 



<!-- notice board -->

<div class="pencil-bg">

  <div class="container">

    <div class="portal-all-count">

      <div class="portal-all">

        <div class="port">

          <h5>What would you like to learn</h5>          

          <h2>Complete Education Solution</h2>

        </div>

        <div class="kg">

          <h2>Director &nbsp; <span>Desk</span></h2>

          <p>To cross the barriers and move towards <span class="text-hide">the path of lght of knowledge, love and spiritof tolerance</span> <a href="{{url('wps/about')}}"><b>DR. Ramiz Bari</b></a></p>

        </div>

      </div>

    </div>

  </div>

</div>

@endsection