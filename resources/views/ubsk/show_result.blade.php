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
                    <div class="row">
            <div class="col-md-12">
                @if (session('msgerror'))
                <div class="alert alert-danger light no-margin">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon-cross2"></i> {{ session('msgerror') }}
                </div>
                <hr>
                @endif
                @if (session('msgsuccess'))
                <div class="alert alert-success light no-margin">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon-check_circle"></i> {{ session('msgsuccess') }}
                </div>
                <hr>
                @endif
                
				<h1 class="text-center mb-4">Check Your Result</h1>
				<br/>
				
                <form class="form-horizontal" autocomplete="off" method="post" role="form" action="{{url('ubsk/show_result')}}">
                    {{csrf_field()}}
					
                    
					<div class="form-group">
						<label class="col-sm-6 control-label " for=""> Registration Number* </label>
						<div class="col-sm-6">
							<input type="text" id="reg_no" name="reg_no" value="<?php echo (isset($post['reg_no']) && $post['reg_no']<>'')?$post['reg_no']:''?>" class="" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-6 control-label " for=""> Date Of Birth* </label>
						<div class="col-sm-6">
							<input type="date" min="1975-01-01" max="2020-12-31" id="dob" name="dob" value="<?php echo (isset($post['dob']) && $post['dob']<>'')?$post['dob']:''?>" placeholder="Pick Date" class="dateofbirth"  required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-6 control-label " for=""> Mobile No.* </label>
						<div class="col-sm-6">
							<input type="number" id="mobile" name="mobile" value="<?php echo (isset($post['mobile']) && $post['mobile']<>'')?$post['mobile']:''?>" class="" required>
						</div>
					</div>
					
					
                    <div class="space-4"></div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-10 col-md-2">
                            <button class="btn btn-info" type="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>

                        </div>
                    </div>
                </form>
				
				<?php //var_dump($result); ?>
				
				<?php if(isset($details->id)){ ?>
				<h1 class="mt-4 text-center">Result:</h1>
               
				<?php if(isset($result->is_selected) && $result->is_selected=='Yes'){ ?>
				<p class="text-success">You are selected.</p>
               
				<?php }elseif(isset($result->is_selected) && $result->is_selected=='No'){ ?>
				<p class="text-danger">You are not selected.</p>
               <?php }else{ ?>
				<p class="text-info">Result not declared.</p>
               <?php } ?>
			   
			   <?php } ?>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-defination">
                    <h4 class="mb-20">Latest Updates</h4>
                    <div class="holder">
                        <ul id="ticker01">
                                <li><span>01/10/2020</span> <a href="{{url('ubsk/registration')}}">Registration is going on.</a></li>
                        </ul>
                    </div>
                </div>
				
				<div class="single-defination">
                    <h4 class="mb-20">Important Links</h4>
                    <div class="holder">
                        <ul id="ticker01">
                                <li><a href="{{url('ubsk/get_reg_form')}}">Print Application Form.</a></li>
								<li><a href="{{url('ubsk/show_result')}}">Check Result</a></li>
                        </ul>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
</section>
<!--::review_part start::-->

@endsection