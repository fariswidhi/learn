<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class DashboardController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
        // if (Session::get('logged') != 'true') {
        //     # code...
        // }



         

    }



    public function index(){
        // print_r(Session::get('logged'));
             // $this->redirecting();
        // return "as";
        $level = Auth::user()->type;
    	return view('dashboard/index',compact('level'));
    }
   
    public function kidsActivity(){

    	return view('dashboard/kids-activity');
    }
}
