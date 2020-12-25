@extends('layouts.ubsk.layout')
@section('content')
<section class="breadcrumb breadcrumb_bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <!-- <div class="breadcrumb_iner_item">
                        <h2>About Us</h2>
                        <p>Home<span>/</span>About Us</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- feature_part start-->
<section class="feature_part single_feature_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 navbarhome">
            <nav class="navbar navbar-expand-sm navbar-light bg-light "> 
                <div class="container"> 
                   
                    <button class="navbar-toggler" type="button" 
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false" 
                            aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span> 
                    </button> 
        
                    <div class="collapse navbar-collapse"></div> 
        
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                        @include('ubsk.menu')
                    </div> 
                </div> 
            </nav> 
            </div>
            <div class="col-md-8">
                <div class="single-defination">
                    <h4 class="mb-20">&nbsp;</h4>
                    gdgfd
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-defination">
                    <h4 class="mb-20">Latest Updates</h4>
                    <div class="holder">
                        <ul id="ticker01">
                                <li><span>10/10/2007</span> <a href="#">The first thing that most Javascript programmers</a></li>
                                <li><span>10/10/2007</span> <a href="#">End up doing is adding some code</a></li>
                                <li><span>10/10/2007</span> <a href="#">The code that you want to run</a></li>
                                <li><span>08/10/2007</span> <a href="#">Inside of which is the code that you want to run</a></li>
                                <li><span>08/10/2007</span> <a href="#">Right when the page is loaded</a></li>
                                <li><span>05/10/2007</span> <a href="#">Problematically, however, the Javascript code</a></li>
                                <li><span>04/10/2007</span> <a href="#">The first thing that most Javascript programmers</a></li>
                                <li><span>04/10/2007</span> <a href="#">End up doing is adding some code</a></li>
                                <li><span>04/10/2007</span> <a href="#">The code that you want to run</a></li>
                                <li><span>03/10/2007</span> <a href="#">Inside of which is the code that you want to run</a></li>
                                <li><span>03/10/2007</span> <a href="#">Right when the page is loaded</a></li>
                                <li><span>01/10/2007</span> <a href="#">Problematically, however, the Javascript code</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::review_part start::-->

@endsection