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
        
                    <div class="collapse navbar-collapse"  id="navbarSupportedContent"> 
                        @include('ubsk.menu')
                    </div> 
                </div> 
            </nav> 
            </div>
            <div class="col-md-8">
                <div class="single-defination">
                    <h4 class="mb-20">Ujjawal bhawishya Shikchhan Kendra</h4>
                    <p>Ujjawal bhawishya Shikchhan Kendra is a part of Warz Educational &amp; Welfare Trust which is
                        established with a great thought and vision for the upliftment of downtrodden, educationally
                        backward &amp; weaker section of the society. The trust <b>“Ujjawal bhawishya Shikchhan Kendra”</b>
                        came into existence in the year 2020 under the guidance of core members of Warz Educational
                        &amp; Welfare Trust. The main objective of this Trust is to provide basic education, aspiration to
                        support and enhance the education system in India, especially at school level. Our aim is to
                        empower the underprivileged people through education, healthcare and sustainable livelihood.
                        We are working towards having a society where there is no inequality and discrimination.</p>
                        <br>
                    <h4 class="mb-20">Mission</h4>
                    <p>The main Mission of Ujjawal bhawishya Shikchhan Kendra is to promote value based education
                        to all children, to create a permanent forum of education activist for promoting education, to
                        preserve the treasures of our culture and utilize them for the welfare of our society, to conduct
                        training in order to train men and women towards education and welfare of our society, to
                        provide support in educational and other social programs that directly improves the education
                        and Wellbeing of children and poor, to ensure social justice, economic and educational
                        enhancement to the disadvantaged sections of the society.</p>
                        <br>
                    <h4 class="mb-20">Vision</h4>
                    <p>Our vision is to make our society a better place where all children are treated with love and
                        respect, empower them with proper education and also make our society a place where people
                        are placed at the center of all development initiatives ensuring social justice.</p>
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