<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use Auth;
use App\User;
use App\Level;
use App\Points;
use DB;
use App\Activities;
use App\Material;
use App\Modules;
class KidsController extends Controller
{

    private $url = "daftar-anak";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $url = $this->url;
        $userid = Auth::id();
        $data =  User::where('id_parent',$userid)->get();
        return view('dashboard/kids',compact('url','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $url = $this->url;
        $levels = Level::all();
        return view('dashboard/kids/create',compact('url','levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //e

    $username = $request->username;
    $find = User::where('username',$username);
    // echo $count;
    $userid = Auth::user()->id;
// echo Auth::user()->id;
    if ($find->count() == 0) {
        $class = new User;
        $class->name = $request->name;
        $class->username  = $username;
        $class->password = bcrypt($request->password);
        $class->id_parent = $userid;
        $class->type = 3;
        $class->active = 1;
        $class->email = $request->email;
        $class->id_level = $request->level;
        $class->gender = $request->gender;
        $class->save();
        $request->session()->flash('success', 'Berhasil Menambah Data');
        return redirect('panel/daftar-anak');
    }
    else{

        $request->session()->flash('failed', 'Silahkan Cari Username Lain');
        return redirect()->back()->withInput();
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = User::find($id);
        $levels = Level::all();
        return view('dashboard/kids/edit',compact('data','levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $password = $request->password;
        $update = User::find($id);
        if (empty($password)) {
                        $update->name = $request->name;
            $update->gender = $request->gender;
            $update->id_level = $request->level;
        }
        else{

            $update->name = $request->name;
            $update->gender = $request->gender;
            $update->password = bcrypt($request->password);   
            $update->id_level = $request->level;

        }
        $update->save();


        $request->session()->flash('success', 'Berhasil Mengubah Data');
        return redirect('panel/daftar-anak');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        //
        $delete = User::find($id);
        $delete->delete();
        $request->session()->flash('success', 'Berhasil Menghapus Data');
        return redirect('panel/daftar-anak');
    }

    public function detail($username){
        $user = User::where('username',$username)->first();
        $id = $user->id;
        $points = Points::where('id_user',$id)->take(5)->get();


        
           $activity = DB::select('select * from activities where id_children ="'.$id.'" group by hour(created_at),day(created_at) order by created_at  desc  limit 0,5');

            $act = [];
            $no =1;
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
            'activity'=>$act,

            ];

            // print_r(count($arr[0]['activity']));
            $username = $username;
        return view('dashboard/kids/detail',compact('arr','points','user','no','points','username'));


    }

    public function activityKids($username){
        $user = User::where('username',$username)->first();
        $id = $user->id;   
        // $points = Points::where('id_user',$id)->paginate(10);
                   $activity = DB::select('select * from activities where id_children ="'.$id.'" group by hour(created_at),day(created_at) order by created_at  desc ');

            $act = [];
            $no =1;
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
            'activity'=>$act,

            ];
            $no=1;
        return view('dashboard/kids/fullactivity',compact('points','arr','no'));
    }

    public function pointKids($username){

        $user = User::where('username',$username)->first();
        $id = $user->id;   
        $points = Points::where('id_user',$id)->orderBy('created_at','desc')->paginate(10);
        $no=1;
             return view('dashboard/kids/fullpoints',compact('points','no'));   
    }
}
