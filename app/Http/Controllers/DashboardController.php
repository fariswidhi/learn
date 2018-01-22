<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Activities;
use DB;
use App\Material;
use App\Modules;
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
        // print_r(Request::segment(1));
        $level = Auth::user()->type;
    	return view('dashboard/index',compact('level'));
    }
   
    public function kidsActivity(){

        $datas = User::where('id_parent',Auth::id())->get();
        // print_r($data);
        $arr = [];
        foreach ($datas as $d) {
            $id = $d->id;

           $activity = DB::select('select * from activities where id_children ="'.$id.'" order by created_at desc  limit 0,5');

            $act = [];
            foreach ($activity as $a) {
                if ($a->activity == 1) {
                    $action = "Membaca Modul";
                }
                else{
                    $action = "Mengerjakan Soal";
                }

                if ($a->activity==1) {

                    $tb = Material::find($a->id)->first();
                    $name = $tb->name;
                }
                else{

                    $tb = Modules::find($a->id)->first();
                    $name = $tb->name;

                }
                $act[]  = [
                    'activity'=>$action,
                        'name'=>$name,

            'times'=>$d->created_at,
                ];
            }

             $arr[] = [
            'username'=>$d->username,
            'activity'=>$act,

            ];
        }






        // // print_r($arr);
        // foreach ($arr as $d) {
        //     # code...
        //     foreach ($d as $da) {
        //         # code...
        //         print_r($da);
        //     }

        // }


    	return view('dashboard/kids-activity',compact('data','arr'));
    }

    public function activities($username){
        $userid = User::where('username',$username)->first()->id;



           $activity = DB::select('select * from activities where id_children ="'.$userid.'" group by hour(created_at),day(created_at) order by created_at desc');

            $act = [];
            foreach ($activity as $a) {
                if ($a->activity == 1) {
                    $action = "Membaca Modul";
                }
                else{
                    $action = "Mengerjakan Soal";
                }

                if ($a->activity==1) {

                    $tb = Material::find($a->id)->first();
                    $name = $tb->name;
                }
                else{

                    $tb = Modules::find($a->id)->first();
                    $name = $tb->name;

                }
                $act[]  = [
                    'activity'=>$action,
                        'name'=>$name,
                        'times'=>$a->created_at,
                ];
            }

             $arr = [
            'activity'=>$act,

            ];

        // print_r($arr);
            $no=1;
        // $data = Activities::where('id_children',$userid);
        return view('dashboard/activities',compact('arr','no'));


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
