<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrantController extends Controller
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
        return view('index');
    }
    public function about(Request $request){
		return view('pages/about');
	}
	public function donate(Request $request){
		return view('pages/donate');
	}
}
