@extends('layouts.ubsk.layout')
@section('content')
<section class="breadcrumb breadcrumb_bg2 noprint">
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
            <div class="col-md-12 navbarhome noprint">
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
            <div class="col-md-12">
                <div class="single-defination" id="printme">
                
				<!-- <h4 class="mb-20">&nbsp;</h4>-->
                <div class="clearfix">  
                
				<div class="float-left" style="width:20%">
					<img src="{{ asset('public/assets/img/logo.png') }}" style="width:70%" />
				</div>
				
				<div class="float-right" style="width:80%">
					<h1 class="text-center mb-2">WARZ Educational & Welfare Trust</h1>
					<h1 class="text-center mb-2">उज्ज्वल भविष्य शिछण केंद्र</h1>
					<h4 class="text-center mb-2">Matiyari Chowk, Near Overbridge Bagnagar, Araria (Bihar) - 854325</h4>
					<h4 class="text-center mb-2">Branch Office, WARZ Public School, Purnea (Bihar) - 854327</h4>
					<h4 class="text-center mb-2">Email: warzgroup.india@gmail.com | Contact : +91-9097566878,+91-9473096053</h4>
				</div>
				
				</div>
				
				<div class="float-none">&nbsp;</div>
				
				<hr style="height:3px;background-color:#017bb8"/>
				
				<div class="col-md-10">
				
				  <div class="row">
					
					<div class="col-sm-6">
					  <span><b>Post Applied For:</b></span> <span><?=(isset($details->post_applied_for))?$details->post_applied_for:''?><span>
					</div>
					
					<div class="col-sm-6">
					  <span><b>Address:</b></span> 
					  <span>
					  <?=(isset($details->applying_ward))?'Ward - '.$details->applying_ward.',':''?>
					  <?=(isset($details->applying_panchayat))?'Panchayat - '.$details->applying_panchayat.',':''?>
					  <?=(isset($details->applying_block))?'Block - '.$details->applying_block.',':''?>
					  <?=(isset($details->applying_district))?'District - '.$details->applying_district.',':''?>
					  </span>
					</div>
										
				  </div>
				  
				  <h3 class="mt-2 mb-2" style="">Personal Detail</h3>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>Candidate Name:</b></span> 
					  <span>
						<?=(isset($details->candidate_name))?$details->candidate_name:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><b>Father's/Husband's Name:</b></span> 
					  <span>
					  
						<?php 
						if(isset($details->husband_name) && $details->husband_name<>''){			echo $details->husband_name;
						}elseif(isset($details->father_name) && $details->father_name<>''){
							echo $details->father_name;
						}else{
						}?>
						
						
					  </span>
					</div>
				  </div>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>Mother's Name:</b></span> 
					  <span>
						<?=(isset($details->mother_name))?$details->mother_name:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><b>Date Of Birth:</b></span> 
					  <span>
						<?=(isset($details->dob))?date('d-m-Y',strtotime($details->dob)):''?>
					  </span>
					</div>
				  </div>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>Blood Group:</b></span> 
					  <span>
						<?=(isset($details->blood_group))?$details->blood_group:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><b>Gender:</b></span> 
					  <span>
						<?=(isset($details->gender))?$details->gender:''?>
					  </span>
					</div>
				  </div>
				
				<div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>Mobile No.:</b></span> 
					  <span>
						<?=(isset($details->mobile))?$details->mobile:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><b>Aadhar No.:</b></span> 
					  <span>
						<?=(isset($details->aadhar))?$details->aadhar:''?>
					  </span>
					</div>
				  </div>
				
				<h3 class="mt-2 mb-2" style="">Address</h3>
				
				<div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>Address:</b></span> 
					  <span>
						<?=(isset($details->village))?'Village: '.$details->village.',':''?>
						<?=(isset($details->post_office))?'Post Office: '.$details->post_office.',':''?>
						<?=(isset($details->police_station))?'Police Station: '.$details->police_station.',':''?>
						<?=(isset($details->block))?'Block: '.$details->block:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><b>District:</b></span> 
					  <span>
						<?=(isset($details->district))?$details->district:''?>
					  </span>
					</div>
				  </div>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>State:</b></span> 
					  <span>
						<?=(isset($details->state))?$details->state:''?>
					  </span>
					</div>					
				  </div>
				  
	<h3 class="mt-4">Academic Qualification</h3>

	<table class="table table-responsive mb-4">
	<tr>
		<td>Exam Passed</td>
		<td>Board/University</td>
		<td>Appeared/passed</td>
		<td>Year</td>
		<td>Secured position with %</td>
		
	</tr>
	
	<?php 
	if(isset($qual_details)){
	foreach($qual_details as $q_detail){?>
	
	<tr>
		<td><?=$q_detail->exam_passed?></td>
		<td><?=$q_detail->board_or_university?></td>
		<td><?=$q_detail->appeared_or_passed?></td>
		<td><?=$q_detail->passed_year?></td>
		<td><?=$q_detail->marks?></td>
		
	</tr>
	<?php } }?>
</table>

				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><b>Photo:</b></span> <br/>
					  <span>
						<?php if(isset($details->photo) && $details->photo<>''){?>
						<img src="{{ asset('public/upload/photos/'.$details->photo) }}" width="150" height="100"/>
						<?php }?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><b>Signature:</b></span> <br/>
					  <span>
						<?php if(isset($details->signature) && $details->signature<>''){?>
						<img src="{{ asset('public/upload/signatures/'.$details->signature) }}" width="150" height="100"/>
						<?php }?>
					  </span>
					</div>
				  </div>
				  
				  
				  </div>
				  
				  <div class="col-md-2">
				  kkkkkkkkkkkkkk
				  </div>
				  
				  <div class="text-center">
				  <button type="button" class="btn btn-primary btn-lg  mt-4 mb-4 noprint" onclick="print_form()">Print</button>
				 </div>

                <!-- PAGE CONTENT ENDS -->
				
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--::review_part start::-->


<br /><br /><br /><br /><br />
@endsection