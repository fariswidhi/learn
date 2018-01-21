<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;

class DashboardController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
                $this->middleware('isUser');
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
    public function settings(){
        $data = User::find(Auth::id());
        return view('dashboard/settings',compact('data'));   
    }

    public function changeProfile(Request $request){
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            # code...
        $user->password = bcrypt($request->password);
        }
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->save();
            $request->session()->flash('success', 'Berhasil Mengubah Profil');
        return redirect()->back();
    }
}
