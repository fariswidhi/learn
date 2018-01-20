<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $url='levels';

    public function index()
    {
        //
        $url = $this->url;
        $title = 'Data Jenjang';
        $datas = Level::all();
        $no  = 1;
        return view($url.'/index',compact('url','title','datas','no'));
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
        $title = 'Tambah Jenjang';
        return view($url.'/create',compact('title','url'));
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
        $class = new Level;
        $class->name = $request->name;

        $class->save();
        $request->session()->flash('success', 'success');

        return redirect('/admin/levels');

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
        $url = $this->url;
        $title = 'Tambah Jenjang';
        $data = Level::find($id);
        return view($url.'/edit',compact('title','url','data'));
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
        $update = Level::find($id);
        $update->name = $request->name;
        $update->save();
                $request->session()->flash('success', 'success');

        return redirect('/admin/levels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $delete = Level::find($id);
        $delete->delete();
        
        return redirect('/admin/levels');
    }

}
