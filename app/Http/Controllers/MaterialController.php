<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Subjects;
use App\Level;
use Auth;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $url = "materials";
    public function index()
    {
        //
        $title = "Materi";
        $datas = Material::all();
        $no = 1;
        $url = $this->url;
        return view($this->url.'/index',compact('title','datas','no','url'));
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
        $title = "Tambah Materi";
        $datas = Subjects::all();
        $levels = Level::all();
         return view($this->url.'/create',compact('title','url','datas','levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $class = new Material;
        $class->name = $request->name;
        $class->content = $request->content;
        $class->id_subject = $request->subjects;
        $class->id_level = $request->levels;
        $class->id_user = Auth::id();
        $save = $class->save();

        if ($save == true) {
            $request->session()->flash('success', 'success');
            return redirect('admin/'.$this->url);
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

        $title = "Edit Materi";
        $url = $this->url;

        $data = Material::find($id);

        $subjects = Subjects::all();
        $levels = Level::all();
        
        return view('materials/edit',compact('title','url','id','data','subjects','levels'));
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
        $class->id_level = $request->levels;
        $class->save();
        $request->session()->flash('success', 'Berhasil Mengubah Data');
        return redirect('admin/'.$this->url);
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
        $class = Material::find($id);
        $delete = $class->delete();
        // if ($delete == true) {
                $request->session()->flash('success', 'Berhasil Menghapus Data');
                            return redirect('admin/'.$this->url);
        // }

    }
}


