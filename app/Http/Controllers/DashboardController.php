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
use App\Helper\SmsGateway;
use App\Verifications;

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
        // print_r(Request::segment(1));
        $level = Auth::user()->type;
        $active = Auth::user()->active;
        $type =Auth::user()->type;
    	return view('dashboard/index',compact('level','active','type'));

    }
   
    public function kidsActivity(){

        $this->middleware('isUser');
        $datas = User::where('id_parent',Auth::id())->get();
        // print_r($data);
        $arr = [];

        foreach ($datas as $d) {
            $id = $d->id;

           $activity = DB::select('select * from activities where id_children ="'.$id.'" group by hour(created_at),day(created_at) order by created_at  desc  limit 0,5');

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
        $active = Auth::user()->active;


        // Session::forget('verify');
        return view('dashboard/settings',compact('data','active'));   

        // print_r(Session::all());
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
    public function verify(Request $request){
        if ($request->type == 'code') {
            # code...
            $code = $request->code;

            $data = Verifications::where('id_user',Auth::id())->orderBy('created_at','desc')->first();
            $codeData = $data->verification_code;

            if ($code == $codeData ) {
                $update = User::where('id',Auth::id())->update(['active'=>1]);
                Session::forget('verify');
                Session::flash('success','Akun Anda Sudah Terverifikasi');

            }
            else{
                Session::flash('fail','Maaf Kode Verifikasi Salah');
            }


            return redirect()->back();
        }
        else{
        $phone = $request->phone;
        // echo $phone;

        // print_r($sms->getDevice(76348));

        $code = mt_rand(10000, 99999);

        $verify = new Verifications;
        $verify->id_user = Auth::id();
        $verify->verification_code = $code;
        $verify->save();


        $data = Verifications::where('id_user',Auth::id())->orderBy('created_at','desc')->first();
        $email = "emailnotfound1234@gmail.com";
        $pass = "sekolahan";

        Session::put('phone',$phone);
        Session::put('code',$code);
        Session::put('verify','ok');
        $number = $request->phone;
        $user = User::find(Auth::id());
        $user->phone = $number;
        $user->save();


 $email = "emailnotfound1234@gmail.com";
        $pass = "sekolahan";
        $number = Session::get('phone');
        $deviceId = 76348;
        $c = Session::get('code');
        // $msg = ;
        // $number = "081224436508";
        $sms = new SmsGateway($email,$pass);

       $res =$sms->sendMessageToNumber($number,'Kode Verifikasi '.$c,$deviceId);

        // Session::forget('code');
        // Session::forget('phone');

        // print_r($res);


        return redirect()->back();

        }
        // if ($request->c) {
        //     # code...
        // }

        // $data = Verifications::find($verify->id);



    }

    public function kidsDetail(){

echo "string";
    }

    public function profile(){
        $data = User::find(Auth::id());
        return view('dashboard/profile',compact('data'));
    }

    public function reset(){
        Session::forget('verify');
        return redirect()->back();
    }
}
