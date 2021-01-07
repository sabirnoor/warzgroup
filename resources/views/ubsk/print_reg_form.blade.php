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
					<img src="{{ asset('public/assets/img/logo.png') }}" style="width:70%" /><br/>
					
					<?php
					if(isset($details->created_at)){
						$reg_date = date('d-m-Y',strtotime($details->created_at));
						$reg_time = date('h:i A',strtotime($details->created_at));
					}
					?>					
					Date: <?=(isset($reg_date))?$reg_date:''?><br/>
					Time: <?=(isset($reg_time))?$reg_time:''?>
					
				</div>
				
				<div class="float-right" style="width:80%">
					<h1 class="text-center mb-2">WARZ Educational & Welfare Trust</h1>
					<h1 class="text-center mb-2">उज्जवल भविष्य शिक्षण केन्द्र</h1>
					<h4 class="text-center mb-2">Matiyari Chowk, Near Overbridge Bagnagar, Araria (Bihar) - 854325</h4>
					<h4 class="text-center mb-2">Branch Office, WARZ Public School, Purnea (Bihar) - 854327</h4>
					<h4 class="text-center mb-2">Email: warzgroup.india@gmail.com | Contact : +91-9097566878,+91-9473096053</h4>
				</div>
				
				</div>
				
				<div class="float-none">&nbsp;</div>
				
				<!--<hr style="height:3px;background-color:#017bb8"/>-->
				<hr class="mb-4" style="height:5px;background-color:#017bb8" />
				
				<div class="clearfix">  
				
				<div class="col-md-10 float-left">
				
				<h3 class="text-center" style="border:2px solid #017bb8">Registration No:<?=(isset($details->registration_no))?$details->registration_no:''?></h3>
				
				  <div class="row mt-4">				
					
					
					<div class="col-sm-6">
					  					  					  
					  <h3><?=(isset($details->candidate_name))?$details->candidate_name:''?></h3>
					  
					  <span><strong>Post Applied For:</strong></span> 
					  <span>
					  <?=(isset($details->post_applied_for))?$details->post_applied_for:''?><br/>
					  <span>
					  
					  <?php if(isset($details->applying_ward)){?>
					  <span><strong>Ward:</strong></span> 
					  <span>
					  <?=(isset($details->applying_ward))?$details->applying_ward:''?><br/>
					  </span>
					  <?php } ?>
					  
					  <?php if(isset($details->applying_panchayat)){?>
					  <span><strong>Panchayat:</strong></span> 
					  <span>
					  <?=(isset($details->applying_panchayat))?$details->applying_panchayat:''?><br/>
					  </span>
					  <?php } ?>
					  
					  <?php if(isset($details->block_name)){?>
					  <span><strong>Block:</strong></span> 
					  <span>
					  <?=(isset($details->block_name))?$details->block_name:''?><br/>
					  </span>
					  <?php } ?>
					  
					  <?php if(isset($details->district_name)){?>
					  <span><strong>District:</strong></span> 
					  <span>
					  <?=(isset($details->district_name))?$details->district_name:''?><br/>
					  </span>
					  <?php } ?>
					  
					 
					  
					</div>
					
					<div class="col-sm-6">
					  
					</div>
					
					
										
				  </div>
				  
				  <h3 class="mt-2 mb-2" style="">Personal Detail</h3>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><strong>Father's/Husband's Name:</strong></span> 
					  <span>
					  
						<?php 
						if(isset($details->husband_name) && $details->husband_name<>''){			echo $details->husband_name;
						}elseif(isset($details->father_name) && $details->father_name<>''){
							echo $details->father_name;
						}else{
						}?>
						
						
					  </span>
					  
					</div>
					<div class="col-sm-6">
					  <span><strong>Blood Group:</strong></span> 
					  <span>
						<?=(isset($details->blood_group))?$details->blood_group:''?>
					  </span>
					</div>
				  </div>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					  <span><strong>Mother's Name:</strong></span> 
					  <span>
						<?=(isset($details->mother_name))?$details->mother_name:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><strong>Aadhar No.:</strong></span> 
					  <span>
						<?=(isset($details->aadhar))?$details->aadhar:''?>
					  </span>
					 
					</div>
				  </div>
				  
				  <div class="row mt-2">
					<div class="col-sm-6">
					   <span><strong>Date Of Birth:</strong></span> 
					  <span>
						<?=(isset($details->dob))?date('d-m-Y',strtotime($details->dob)):''?>
					  </span>
					</div>
					<div class="col-sm-6">
					   <span><strong>Mobile No.:</strong></span> 
					  <span>
						<?=(isset($details->mobile))?$details->mobile:''?>
					  </span>
					  
					</div>
				  </div>
				
				<div class="row mt-2">
					<div class="col-sm-6">
					 <span><strong>Gender:</strong></span> 
					  <span>
						<?=(isset($details->gender))?$details->gender:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  <span><strong>Email ID:</strong></span> 
					  <span>
						<?=(isset($details->email))?$details->email:''?>
					  </span>
					</div>
				  </div>
				
				<h3 class="mt-2 mb-2" style="">Address</h3>
				
				<div class="row mt-2">
					<div class="col-sm-6">
					  <span><strong>Address:</strong></span> 
					  <span>
						<?=(isset($details->village))?'Village: '.$details->village.',':''?>
						<?=(isset($details->post_office))?'Post Office: '.$details->post_office.',':''?>
						<?=(isset($details->police_station))?'Police Station: '.$details->police_station.',':''?>
						<?=(isset($details->block))?'Block: '.$details->block.',':''?>
						<?=(isset($details->district))?'District: '.$details->district.',':''?>
						<?=(isset($details->state))?'State: '.$details->state:''?>
					  </span>
					</div>
					<div class="col-sm-6">
					  
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
					<div class="col-sm-12">
					  
					  <h4><strong>Note:</strong> Please submit hard copy of following documents:</h4>
					  <p style="color:#000">
					   (1) Academic Qualification <br />
					   (2) Aadhar Card <br />
					   (3) Recent Photograph(4 pcs.) <br />
					   (4) Bank Detail <br />
					   (5) If you have paid online, submit hardcopy of successful transaction detail. <br />
					 
					  </p>
					  
					</div>
					
				  </div>
				  
				  
				  </div>
				  
				  <div class="col-md-2 float-right">
					<span>
						<?php if(isset($details->photo) && $details->photo<>''){?>
						<img src="{{ asset('public/upload/photos/'.$details->photo) }}" width="138" height="177" style="border:1px solid #000;" />
						<?php }?>
					  </span>
					  <br /><br />
					  
					  <span>
						<?php if(isset($details->signature) && $details->signature<>''){?>
						<img src="{{ asset('public/upload/signatures/'.$details->signature) }}" width="138" height="100" style="border:1px solid #000;" />
						<?php }?>
					  </span>
				  </div>
				  
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
<div id="print_reg_footer" style="color:#fff">WARZ Educational & Welfare Trust</div>
@endsection