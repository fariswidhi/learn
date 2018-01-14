<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Childrens;
use Auth;

class KidsController extends Controller
{

    private $url = "kids";
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
        $data =  Childrens::where('id_user',$userid)->get();
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

        return view('dashboard/kids/create',compact('url'));
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
    $find = Childrens::where('username',$username);
    // echo $count;
    $userid = Auth::user()->id;
// echo Auth::user()->id;
    if ($find->count() == 0) {
        $class = new Childrens;
        $class->name = $request->name;
        $class->username  = $username;
        $class->password = bcrypt($request->password);
        $class->id_user = $userid;
        $class->save();
        $request->session()->flash('success', 'Berhasil Menambah Data');
        return redirect('dashboard/kids');
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
        $data = Childrens::find($id);
        return view('dashboard/kids/edit',compact('data'));
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
        $update = Childrens::find($id);
        if (empty($password)) {
            $update->name = $request->name;
        }
        else{

            $update->name = $request->name;
            
            $update->password = bcrypt($request->password);   
        }
        $update->save();


        $request->session()->flash('success', 'Berhasil Mengubah Data');
        return redirect('dashboard/kids');

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
        $delete = Childrens::find($id);
        $delete->delete();
        $request->session()->flash('success', 'Berhasil Menghapus Data');
        return redirect('dashboard/kids');
    }
}
