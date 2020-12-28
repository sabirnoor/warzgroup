<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Qualification;
use App\District;
use App\Block;
use Validator;

class UbskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ubsk/index');
    }
/*     public function registration(Request $request){
		return view('ubsk/registration');
	} */
	
	public function upload_path() {
		if (is_localhost()) {
			$path = public_path() . '/upload/';
		} else {
			$path = public_path() . '/upload/';
		}

		return $path;
	}
	
	public function registration(Request $request, $id = null){
        $RegistrationList = Registration::where(array('IsDelete' => 0))->orderBy('id', 'ASC')->get();
        if ($request->isMethod('post')){
            $post = $request->all(); //echo '<pre>';print_r($post);die;
			
			if ($request->has('photo')) {
                $rules = array(
                    //'photo' => 'required | mimes:png,jpg,jpeg | max:1000',
                );
                $validator = Validator::make($post, $rules);
                if($validator->fails()) {
                    return redirect('registration')->with('msgerror', 'Photo should be .png,.jpg,.jpeg!');
                }
                if(!is_dir("public/upload/photos/")) {
                    mkdir("public/upload/photos/", 0777, true);
                }
                $image = $request->file('photo');
                $imageName = $image->getClientOriginalName();
				
                $file = explode('.', $imageName);
                $imageName = $file[0]. '_' . md5(microtime()) . '.' . end($file);
				$imageName = str_replace(' ','_',$imageName);
                if (!file_exists(upload_path() . 'photos/'. $imageName)) {
                    $path = upload_path() . 'photos/';
                    $image->move($path, $imageName);
                }
            }
			
			if ($request->has('signature')) {
				$rules = array(
					//'signature' => 'required | mimes:png,jpg,jpeg | max:1000',
				);
				$validator = Validator::make($post, $rules);
				if($validator->fails()) {
					return redirect('registration')->with('msgerror', 'Signature should be .png,.jpg,.jpeg!');
				}
				if(!is_dir("public/upload/signatures/")) {
					mkdir("public/upload/signatures/", 0777, true);
				}
				$image = $request->file('signature');
				$imageName2 = $image->getClientOriginalName();
				
				$file = explode('.', $imageName2);
				$imageName2 = $file[0]. '_' . md5(microtime()) . '.' . end($file);
				$imageName2 = str_replace(' ','_',$imageName2);
				if (!file_exists(upload_path() . 'signatures/'. $imageName2)) {
					$path = upload_path() . 'signatures/';
					$image->move($path, $imageName2);
				}
			}

            $data = array(
                'registration_no' => time(),                
                'post_applied_for' => $post['post_applied_for'],
				'applying_district' => $post['applying_district'],
				'applying_block' => $post['applying_block'],
				'applying_panchayat' => $post['applying_panchayat'],
				'applying_ward' => $post['applying_ward'],
                'candidate_name' => $post['candidate_name'],
                'father_name' => $post['father_name'],
                'mother_name' => $post['mother_name'],
                'village' => $post['village'],
                'post_office' => $post['post_office'],
                'police_station' => $post['police_station'],
                'block' => $post['block'],
                'district' => $post['district'],
                'state' => $post['state'],
                'dob' => $post['dob'],
                'blood_group' => $post['blood_group'],
                'mobile' => $post['mobile'],
                'aadhar' => $post['aadhar'],
                'gender' => $post['gender'],
                //'dob' => DateFormates($post['dob'],'-'),
                'IsDelete' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );
			
			if(!empty($imageName)){
                $data['photo'] = $imageName;
            }
			if(!empty($imageName2)){
                $data['signature'] = $imageName2;
            }
			
            //echo '<pre>';print_r($data);die;
            if(empty($id)){
               
			   $insert = Registration::insertGetId($data);
				
					$imageName='';
					if ($request->has('marksheet1')) {
						$rules = array(
							//'marksheet1' => 'required | mimes:png,jpg,jpeg | max:400',
						);
						$validator = Validator::make($post, $rules);
						if($validator->fails()) {
							return redirect('registration')->with('msgerror', 'Marksheet should be .png,.jpg,.jpeg!');
						}
						if(!is_dir("public/upload/marksheets/")) {
							mkdir("public/upload/marksheets/", 0777, true);
						}
						$image = $request->file('marksheet1');
						$imageName = $image->getClientOriginalName();
						
						$file = explode('.', $imageName);
						$imageName = $file[0]. '_' . md5(microtime()) . '.' . end($file);
						$imageName = str_replace(' ','_',$imageName);
						if (!file_exists(upload_path() . 'marksheets/'. $imageName)) {
							$path = upload_path() . 'marksheets/';
							$image->move($path, $imageName);
						}
					}
				 $qualification_data = array(
					'registration_id' => $insert, 
					'degree' => $post['degree1'],
					'exam_passed' => $post['exam_passed1'],
					'board_or_university' => $post['board_or_university1'],
					'appeared_or_passed' => $post['appeared_or_passed1'],
					'passed_year' => $post['passed_year1'],
					'marks' => $post['marks1'],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				);
				
				if(!empty($imageName)){
					$qualification_data['marksheet'] = $imageName;
				}
				
			    $insert_qual = Qualification::insert($qualification_data);
				
				//2nd row
				if(isset($post['exam_passed2']) && $post['exam_passed2']!=''){
				$imageName='';
				if ($request->has('marksheet2')) {
					$rules = array(
						'marksheet2' => 'required | mimes:png,jpg,jpeg | max:400',
					);
					$validator = Validator::make($post, $rules);
					if($validator->fails()) {
						return redirect('registration')->with('msgerror', 'Marksheet should be .png,.jpg,.jpeg!');
					}
					if(!is_dir("public/upload/marksheets/")) {
						mkdir("public/upload/marksheets/", 0777, true);
					}
					$image = $request->file('marksheet2');
					$imageName = $image->getClientOriginalName();
					
					$file = explode('.', $imageName);
					$imageName = $file[0]. '_' . md5(microtime()) . '.' . end($file);
					$imageName = str_replace(' ','_',$imageName);
					if (!file_exists(upload_path() . 'marksheets/'. $imageName)) {
						$path = upload_path() . 'marksheets/';
						$image->move($path, $imageName);
					}
				}
				$qualification_data = array(
					'registration_id' => $insert, 
					'degree' => $post['degree2'],
					'exam_passed' => $post['exam_passed2'],
					'board_or_university' => $post['board_or_university2'],
					'appeared_or_passed' => $post['appeared_or_passed2'],
					'passed_year' => $post['passed_year2'],
					'marks' => $post['marks2'],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				);
				
				if(!empty($imageName)){
					$qualification_data['marksheet'] = $imageName;
				}
				
				$insert_qual = Qualification::insert($qualification_data);
				
			}
				
				
				//3rd row
				if(isset($post['exam_passed3']) && $post['exam_passed3']!=''){
				$imageName='';
				if ($request->has('marksheet3')) {
					$rules = array(
						'marksheet3' => 'required | mimes:png,jpg,jpeg | max:400',
					);
					$validator = Validator::make($post, $rules);
					if($validator->fails()) {
						return redirect('registration')->with('msgerror', 'Marksheet should be .png,.jpg,.jpeg!');
					}
					if(!is_dir("public/upload/marksheets/")) {
						mkdir("public/upload/marksheets/", 0777, true);
					}
					$image = $request->file('marksheet3');
					$imageName = $image->getClientOriginalName();
					
					$file = explode('.', $imageName);
					$imageName = $file[0]. '_' . md5(microtime()) . '.' . end($file);
					$imageName = str_replace(' ','_',$imageName);
					if (!file_exists(upload_path() . 'marksheets/'. $imageName)) {
						$path = upload_path() . 'marksheets/';
						$image->move($path, $imageName);
					}
				}
				
				$qualification_data = array(
					'registration_id' => $insert, 
					'degree' => $post['degree3'],
					'exam_passed' => $post['exam_passed3'],
					'board_or_university' => $post['board_or_university3'],
					'appeared_or_passed' => $post['appeared_or_passed3'],
					'passed_year' => $post['passed_year3'],
					'marks' => $post['marks3'],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				);
				
				if(!empty($imageName)){
					$qualification_data['marksheet'] = $imageName;
				}
				
				$insert_qual = Qualification::insert($qualification_data);
				
				}
                
				return redirect('ubsk/registration')->with('msgsuccess', 'Save successfully');
            
			}else{
               $insert = Registration::where('id', $id)->update($data);			   
			   
               return redirect('ubsk/registration')->with('msgsuccess', 'Update successfully');
            }
        }
        
		$details = Registration::where(array('id' => $id))->first();
		$districts = District::where('id', '>', 0)->orderBy('name', 'ASC')->get();
		$blocks = Block::where('id', '>', 0)->orderBy('name', 'ASC')->get();
		//print_r($districts);exit;
        return view('ubsk/registration', compact('RegistrationList','id','details','districts','blocks'));
    
	}
	
	public function getblocksbydistrict(Request $request) {

		if ($request->isXmlHttpRequest()) {
			if ($request->isMethod('post')) {
				$district_id = $request->district_id;
				
				$blocks = Block::where('district_id', $district_id)->orderBy('name', 'ASC')->get();

				if ($blocks) {
					echo json_encode(array('success' => true, 'data' => $blocks, 'message' => 'successfully'));
					exit;
				} else {
					echo json_encode(array('success' => false, 'data' => '', 'message' => 'Unable to load. please try again later!'));
					exit;
				}
			}
		}
	}
	
    public function aboutus(Request $request){
		return view('ubsk/aboutus');
	}
}
