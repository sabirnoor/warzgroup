<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsevents;
use App\Registration;
use Validator;
use DB;


class WpsController extends Controller
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
        //echo 1; exit;
		$NewseventsList = Newsevents::where(array('IsDelete' => 0))->orderBy('orders_by', 'ASC')->get();
		return view('wps/index',compact('NewseventsList'));
		
    }     
	
    public function about(Request $request){
		return view('wps/about');
	}
	public function discipline(Request $request){
		return view('wps/discipline');
	}
	public function for_better_future(Request $request){
		return view('wps/for_better_future');
	}
	public function pledge(Request $request){
		return view('wps/pledge');
	}
	public function time_table_dress_mera_sujhaw(Request $request){
		return view('wps/time_table_dress_mera_sujhaw');
	}
	public function rules_regulations(Request $request){
		return view('wps/rules_regulations');
	}
	public function facilities(Request $request){
		return view('wps/facilities');
	}
	public function activities(Request $request){
		return view('wps/activities');
	}
	public function kindergarten(Request $request){
		return view('wps/kindergarten');
	}
	public function parents(Request $request){
		return view('wps/parents');
	}
	public function results(Request $request){
		return view('wps/results');
	}
	public function contact(Request $request){
		return view('wps/contact');
	}
	
}
