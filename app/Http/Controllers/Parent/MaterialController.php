<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use App\Material;
use App\Subjects;
use Auth;
use App\Level;
use App\Activities;
use Carbon\Carbon;


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
                $chars = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');
        if (Auth::user()->type==2) {
            # code...
        $subjects = Subjects::all();



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


        }
        elseif (Auth::user()->type==3) {

            $subjects= Material::where('id_level',Auth::user()->type)->groupBy('id_subject')->get();
        $data = [];

     foreach ($subjects as $subject) {
            # code...

            $name = $subject->subject->name;
            $removeName = strtolower(str_replace($chars, "", $name));
            $permalink = strtolower(str_replace(' ','-',$removeName));
            $data[] = [
            'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$subject->id
            ];
}

        }
   
        
//         $subjects = Subjects::all();



//         foreach ($subjects as $subject) {
//             $name = $subject->name;
//             $removeName = strtolower(str_replace($chars, "", $name));
//             $permalink = strtolower(str_replace(' ','-',$removeName));
//             $data[] = [
//             'name'=>$name,
//             'permalink'=>$permalink,
//             'id'=>$subject->id
//             ];
//         }

        $colors = ['bg-primary','bg-success','bg-secondary','bg-danger','bg-dark','bg-warning'];
// // echo $colors[array_rand($colors)];

        return view('dashboard/'.$this->url,compact('url','data','colors'));

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
        $subjects = Subjects::all();
        $levels = Level::all();
        return view('dashboard/materials/create',compact('url','subjects','levels'));
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

        $requests = $request->except(['_token','_method']);

        if (!empty($request->file('file'))) {
        $file = $request->file('file');
        $name = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'),$name);

        }
        $class = new Material;
        $class->name = $request->name;
        $class->content = $request->content;
        if (!empty($request->file('file'))) {
        $class->file = $name;
        }
        $class->id_subject = $request->subjects;
        $class->id_user = Auth::id();
        $class->id_level = $request->levels;
        $save = $class->save();

        if ($save == true) {
            $request->session()->flash('success', 'success');
            return redirect('panel/daftar-materi/dari-saya');
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

        $lastId = 4;
        $find = Activities::find($lastId);
        $now = date('Y-m-d H:i:s');
        // echo strtotime($find->created_at);
        $dt = Carbon::now();
        echo $dt;
        echo $dt->addMinutes(61);  

        $explode = explode('-', $material);
        $id = end($explode);
        $data = Material::find($id);
        $subjectname = $data->name;
        // print_r($material);

        // $activity = new Activities;
        // $activity->id_children = Auth::id();
        // // 1 : Membaca Materi
        // // 2 : Mengerjakan Soal
        // $activity->activity = 1;
        // // 1: materials;
        // // 2: questions
        // $activity->type = 1;
        // $activity->id = $id;
        // $activity->save();


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
        $url = $this->url;
        $subjects = Subjects::all();
        $levels = Level::all();
        $data = Material::find($id);
        return view('dashboard/materials/edit',compact('data','levels','subjects'));
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
        $class = Material::find($id);
        $class->name = $request->name;
        $class->content = $request->content;
        $class->id_subject = $request->subjects;
        $class->id_user = Auth::id();
        $class->id_level = $request->levels;
        $save = $class->save();

        if ($save == true) {
            $request->session()->flash('success', 'success');
            return redirect('panel/daftar-materi/dari-saya');
        }


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
        $delete = Material::find($id);
        $delete->delete();
        $request->session()->flash('success', 'Berhasil Menghapus Data');
        return redirect('panel/daftar-materi/dari-saya');
    }

    public function fromMe(){
        if (Auth::user()->type == 2) {
            # code...
        $material = Material::where('id_user',Auth::id())->get();
        }
        else{
        $parent = Auth::user()->id_user;
        $material = Material::where('id_user',$parent)->get();   
        }
        $data = [];
        $chars = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');


        foreach ($material as $m) {
            $param = $m->subject->name;
            $removeParam = strtolower(str_replace($chars, "", $param));
            $subject = strtolower(str_replace(' ','-',$removeParam));

            $name = $m->name;
            $removeName = strtolower(str_replace($chars, "", $name));
            $permalink = strtolower(str_replace(' ','-',$removeName));
            $data[] = [
            'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id,
            'subject'=>$subject.'-'.$m->id
            ];
        }
        $no=1;

        return view('dashboard/materials/fromme',compact('data','no'));
    }

    // public function materialDetail($param,$id){
    //     echo $id;
    // }
}
