<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use App\Material;
use App\Subjects;
use Auth;

class MaterialController extends Controller
{

    private $url = "materials";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $url = $this->url;
        // $userid = Auth::id();
        // $data =  Childrens::where('id_user',$userid)->get();
        $materials= Material::all();
        $subjects = Subjects::all();

        $data = [];
        $chars = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');

        foreach ($subjects as $subject) {
            $name = $subject->name;
            $removeName = strtolower(str_replace($chars, "", $name));
            $permalink = strtolower(str_replace(' ','-',$removeName));
            $data[] = [
            'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$subject->id
            ];
        }


        // print_r($data);
        return view('dashboard/'.$this->url,compact('url','data'));
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
    public function show($param)
    {
        //
        $no = 1;
        $explode = explode('-', $param);
        $id = end($explode);
        $material = Material::where('id_subject',$id)->get();

        $data = [];
        $chars = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');

        foreach ($material as $m) {
            $name = $m->name;
            $removeName = strtolower(str_replace($chars, "", $name));
            $permalink = strtolower(str_replace(' ','-',$removeName));
            $data[] = [
            'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id
            ];
        }

            $param = $param;
        return view('dashboard/'.$this->url.'/detail',compact('no','data','param'));
    }

    public function detail($subject,$material){
        $explode = explode('-', $material);
        $id = end($explode);
        $data = Material::find($id);
        $subjectname = $data->name;
        // print_r($material);
        return view('dashboard/materials/detail-material',compact('data','subjectname'));

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
