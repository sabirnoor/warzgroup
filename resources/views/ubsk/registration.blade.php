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
            <div class="col-xs-12">
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
                
				<h1 class="text-center mb-4">Registration Form</h1>
				<br/>
				
                <form class="form-horizontal" autocomplete="off" enctype="multipart/form-data" id="registration" method="post" role="form" action="{{url('ubsk/registration')}}">
                    {{csrf_field()}}
					
                    <input type="hidden" name="page_name" value="">
                    
							
					
					<div class="form-group">
						<label class="col-sm-3 control-label " for=""> Post Applied For* </label>
						<div class="col-sm-9">
							<select name="post_applied_for" id="post_applied_for" class="col-xs-10 col-sm-5"  required>
								
								<option value="">Select</option>
								<option value="Tola Teacher(T.T)">Tola Teacher(T.T)</option>
								<option value="Panchayat Coordinator(P.C.)">Panchayat Coordinator(P.C.)</option>
								<option value="Block Coordinator(B.C.)">Block Coordinator(B.C.)</option>
								<option value="District Coordinator(D.C.)">District Coordinator(D.C.)</option>
								
							</select>
							
						</div>
					</div>
					
				
				<div class="form-group" id="applying_district_div" style="display:none">
						<label class="col-sm-3 control-label " for=""> District* </label>
						<div class="col-sm-9">
							<select name="applying_district" id="applying_district" class="col-xs-10 col-sm-5"  required>
								
								<option value="">Select</option>
								<?php 
								
								if($districts){
                                foreach ($districts as $value) {
									
                            ?>
								<option value="<?=$value->id?>"><?=$value->name?></option>
								<?php
                                }
                            }
                           ?>
								
							</select>
							
							
						</div>
					</div>
					
					<div class="form-group" id="applying_block_div" style="display:none">
					<label class="col-sm-3 control-label " for=""> Block* </label>
					
					<div class="col-sm-9">
							<select name="applying_block" id="applying_block" class="col-xs-10 col-sm-5">								
								<option value="">Select</option>								
								
							</select>
						</div>
						
				</div>
				
				<div class="form-group" id="applying_panchayat_div"  style="display:none">
					<label class="col-sm-3 control-label " for=""> Panchayat* </label>
					<div class="col-sm-9">
						<input type="text" id="applying_panchayat" name="applying_panchayat" value="" class="col-xs-10 col-sm-5">
					</div>
				</div>
					
					
				<div class="form-group" id="applying_ward_div" style="display:none">
					<label class="col-sm-3 control-label " for=""> Ward* </label>
					<div class="col-sm-9">
						<input type="text" id="applying_ward" name="applying_ward" value="" class="col-xs-10 col-sm-5">
					</div>
				</div>
				
					<h3 class="" style="padding-left:100px;">Personal Detail</h3>
					
					<div class="form-group">
						<label class="col-sm-3 control-label " for=""> Candidate Name* </label>
						<div class="col-sm-9">
							<input type="text" id="candidate_name" name="candidate_name" value="" class="col-xs-10 col-sm-5" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label " for=""> Father's Name* </label>
						<div class="col-sm-9">
							<input type="text" id="father_name" name="father_name" value="" class="col-xs-10 col-sm-5" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label " for=""> Husband's Name </label>
						<div class="col-sm-9">
							<input type="text" id="husband_name" name="husband_name" value="" class="col-xs-10 col-sm-5">
						</div>
					</div>

<div class="form-group">
	<label class="col-sm-3 control-label " for=""> Mother's Name* </label>
	<div class="col-sm-9">
		<input type="text" id="mother_name" name="mother_name" value="" class="col-xs-10 col-sm-5" required>
	</div>
</div>





					<div class="form-group">
                        <label class="col-sm-3 control-label " for="title"> DOB* </label>
                        <div class="col-sm-9">
                            <input type="date" min="1975-01-01" max="2020-12-31" id="dob" name="dob" autocomplete value="" placeholder="Pick Date" class="col-xs-10 col-sm-5 dateofbirth"  required>
                        </div>
                    </div>
					
					<div class="form-group">
	<label class="col-sm-3 control-label " for=""> Blood Group  </label>
	<div class="col-sm-9">
		<input type="text" id="blood_group" name="blood_group" value="" class="col-xs-10 col-sm-5">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label " for=""> Gender* </label>
	<div class="col-sm-9">
		
		
		<select name="gender" class="col-xs-10 col-sm-5" required>
		<option value="">Select</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
		</select>						
	</div>
</div>

					
                    <div class="form-group">
                        <label class="col-sm-3 control-label " for="mobile"> Mobile No.*</label>
                        <div class="col-sm-9">
                            <input type="number" id="mobile" name="mobile" value="" placeholder="" class="col-xs-10 col-sm-5 numeric" required />
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-3 control-label " for="email"> Email ID*</label>
                        <div class="col-sm-9">
                            <input type="text" id="email" name="email" value="" placeholder="" class="col-xs-10 col-sm-5" required />
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="col-sm-3 control-label " for="aadhar"> Aadhar No.* </label>
                        <div class="col-sm-9">
                            <input type="text" id="aadhar" name="aadhar" value="" placeholder="" class="col-xs-10 col-sm-5 numeric" required />
                        </div>
                    </div>
					
					<h3 class="" style="padding-left:100px;">Address</h3>
					
                    <div class="form-group">
                        <label class="col-sm-3 control-label " for="village"> Village* </label>
                            <div class="col-sm-9">
							<input type="text" id="village" name="village" value="" placeholder="" class="col-xs-10 col-sm-5" required />
							
                            </div>
                    </div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label " for="post_office"> Post Office* </label>
							<div class="col-sm-9">
							<input type="text" id="post_office" name="post_office" value="" placeholder="" class="col-xs-10 col-sm-5" required />
							
							</div>
					</div>

<div class="form-group">
	<label class="col-sm-3 control-label " for="police_station"> Police Station* </label>
		<div class="col-sm-9">
		<input type="text" id="police_station" name="police_station" value="" placeholder="" class="col-xs-10 col-sm-5" required />
		
		</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label " for="block"> Block* </label>
		<div class="col-sm-9">
		<input type="text" id="block" name="block" value="" placeholder="" class="col-xs-10 col-sm-5" required />
		
		</div>
</div>



<div class="form-group">
	<label class="col-sm-3 control-label " for="district"> District* </label>
		<div class="col-sm-9">
		
		<select name="district" class="col-xs-10 col-sm-5" required>
		<option value="">Select</option>
		<option value="Araria">Araria</option>
		<option value="Arwal">Arwal</option>
		<option value="Aurangabad">Aurangabad</option>
		<option value="Banka">Banka</option>
		<option value="Begusarai">Begusarai</option>
		<option value="Bhagalpur">Bhagalpur</option>
		<option value="Bhojpur">Bhojpur</option>
		<option value="Buxar">	Buxar</option>
		<option value="Darbhanga">	Darbhanga</option>
		<option value="East Champaran">East Champaran</option>
		<option value="Gaya">Gaya</option>
		<option value="Gopalganj">Gopalganj</option>
		<option value="Jamui">Jamui</option>
		<option value="Jehanabad">Jehanabad</option>
		<option value="Khagaria">Khagaria</option>
		<option value="Kishanganj">Kishanganj</option>
		<option value="Kaimur">Kaimur</option>
		<option value="Katihar">Katihar</option>
		<option value="Lakhisarai">Lakhisarai</option>
		<option value="Madhubani">Madhubani</option>
		<option value="Munger">Munger</option>
		<option value="Madhepura">Madhepura</option>
		<option value="Muzaffarpur">Muzaffarpur</option>
		<option value="Nalanda">Nalanda</option>
		<option value="Nawada">Nawada</option>
		<option value="Patna">	Patna</option>
		<option value="Purnia">Purnia</option>
		<option value="Rohtas">Rohtas</option>
		<option value="Saharsa">Saharsa</option>
		<option value="Samastipur">Samastipur</option>
		<option value="Sheohar">Sheohar</option>
		<option value="Sheikhpura">Sheikhpura</option>
		<option value="Saran">Saran</option>
		<option value="Sitamarhi">Sitamarhi</option>
		<option value="Supaul">Supaul</option>
		<option value="Siwan">Siwan</option>
		<option value="Vaishali">Vaishali</option>
		<option value="West Champaran">West Champaran</option>
		</select>
		
		</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label " for="state"> State* </label>
		<div class="col-sm-9">
		
		<select name="state" class="col-xs-10 col-sm-5" required>
		<option value="Bihar">Bihar</option>
		</select>
		
		</div>
</div>


<div class="form-group">
	<label class="col-sm-6 control-label " for=""> Photo* <small style="color:#f00">(format: .jpg/.jpeg/.png Only max size: 200KB)</small> </label>
	<div class="col-sm-6">
		<input type="file" id="candidate_photo" name="photo"  class="col-xs-10 col-sm-5" required>
		<p id="candidate_photo_size"></p>
	</div>
	
</div>

<div class="form-group">
	<label class="col-sm-6 control-label" for=""> Signature* <small style="color:#f00">(format: .jpg/.jpeg/.png Only max size: 200KB)</small> </label>
	<div class="col-sm-6">
		<input type="file" id="candidate_signature" name="signature"  class="col-xs-10 col-sm-5" required>
		<p id="candidate_signature_size"></p>
	</div>
</div>
					


<h2>Academic Qualification</h2>

<table class="table table-bordered table-responsive">
	<tr>
		<td>Exam Passed</td>
		<td>Board/University</td>
		<td>Appeared/passed</td>
		<td>Year</td>
		<td>Secured position with %</td>
		<td>Marksheet
		<small style="color:#f00">(format: .jpg/.jpeg/.png Only max size: 400KB)</small>
		</td>
	</tr>
	<tr>
		<input type="hidden" id="degree1" name="degree1" value="matric">
		<td><input type="text" id="exam_passed1" name="exam_passed1" value="" class="form-control" placeholder="10th or equivalent" required></td>
		<td><input type="text" id="board_or_university1" name="board_or_university1" value="" class="form-control" required></td>
		<td><input type="text" id="appeared_or_passed1" name="appeared_or_passed1" value="" class="form-control" required></td>
		<td><input type="text" id="passed_year1" name="passed_year1" value="" class="form-control" required></td>
		<td><input type="text" id="marks1" name="marks1" value="" class="form-control" required></td>
		<td><input type="file" id="candidate_marksheet1" name="marksheet1"  class="form-control" required>
		<p id="candidate_marksheet1_size"></p>
		</td>
		
	</tr>
	
	<tr>
		<input type="hidden" id="degree2" name="degree2" value="intermediate">
		<td><input type="text" id="exam_passed2" name="exam_passed2" value="" class="form-control" placeholder="12th or equivalent"></td>
		<td><input type="text" id="board_or_university2" name="board_or_university2" value="" class="form-control"></td>
		<td><input type="text" id="appeared_or_passed2" name="appeared_or_passed2" value="" class="form-control" ></td>
		<td><input type="text" id="passed_year2" name="passed_year2" value="" class="form-control"></td>
		<td><input type="text" id="marks2" name="marks2" value="" class="form-control"></td>
		<td><input type="file" id="candidate_marksheet2" name="marksheet2"  class="form-control">
		<p id="candidate_marksheet2_size"></p>
		</td>
	</tr>
	
	<tr>
		<input type="hidden" id="degree3" name="degree3" value="graduation">
		<td><input type="text" id="exam_passed3" name="exam_passed3" value="" class="form-control" placeholder="Graduation or equivalent"></td>
		<td><input type="text" id="board_or_university3" name="board_or_university3" value="" class="form-control"></td>
		<td><input type="text" id="appeared_or_passed3" name="appeared_or_passed3" value="" class="form-control" ></td>
		<td><input type="text" id="passed_year3" name="passed_year3" value="" class="form-control"></td>
		<td><input type="text" id="marks3" name="marks3" value="" class="form-control"></td>
		<td><input type="file" id="candidate_marksheet3" name="marksheet3"  class="form-control">
		<p id="candidate_marksheet3_size"></p>
		</td>
	</tr>
	
</table>

<div class="form-group">
  <label for="comment">Term & Condition:</label>
  <textarea class="form-control" rows="5" id="comment" readonly>
  
● Trust may ask each Student to Pay minimum INR 90 or any amount lass than INR 150 per month, Trust need your full co-operation in collecting money from Students.
  
● The teacher must not work in another place without the permission from the trust. 

● For Panchayat coordinator and Block coordinator monthly payment will start only when all the centers in your Panchayat(for  Panchayat coordinator) and in your block(for block coordinator)will be open and students would start coming to the respective centers.

I here be declare that the information given by me in this application is true and correct to the best of my knowledge and I have read all the above term and conditions.


  </textarea>
</div>

<div class="form-check mb-4">
  <label class="form-check-label">
    <input type="checkbox" name="tandc" class="form-check-input" value="1" required>I agree with term and condition.
  </label>
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

               

                <div class="hr hr32 hr-dotted"></div>
		
<h2 class="mt-4">Account Details:</h2>

		
<p style="color:#000" class="">
<strong>Account Holder Name:</strong> Ramiz Bari<br />
<strong>Bank:</strong> State Bank Of India<br />
<strong>A/C Number:</strong> 30397219958<br />
<strong>IFSC:</strong> SBIN0016011<br />
<strong>Branch:</strong> Jalalgarh, Purnea branch<br />
</p>

<h2 class="mt-4">UPI Details:</h2>

<strong> Phone Pay, Google pay, Paytm:</strong> 9097-566-878

<br /><br /><br />

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
                                <li><a href="{{url('ubsk/get_reg_form')}}">Print Application Form</a></li>
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