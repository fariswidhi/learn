<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules;
use App\Subjects;
use App\Questions;
use App\Answers;

class ModuleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $url = "modules";
    public function index()
    {
        //
        $title = "Modul";
        $datas = Modules::all();
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
        $title = "Tambah Modul";

        $subjects = Subjects::all();
         return view($this->url.'/create',compact('title','url','subjects'));
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
        $requests = $request->except(['_token','_method']);
        $class = new Modules;
        $class->name = $request->name;
        $class->time = $request->time;
        $class->description = $request->description;
        $class->id_subjects = $request->subjects;
        $save = $class->save();

        if ($save == true) {
            $request->session()->flash('success', 'success');
            return redirect('admin/'.$this->url);
        }


// name content subjects time desription
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

        $title = "Edit Modul";
        $url = $this->url;
        $data = Questions::where('id_module',$id);
        print_r($data);
        // $data = Modules::find($id);

        // return view($this->url.'/detail',compact('data','url','title','id'));
    }

    public function addQuestions(Request $request,$id){
        $answer = $request->answer[0];
        // print_r($request->all());
        $question = new Questions;
        $question->name = $request->question;
        $question->id_module = $id;
        $question->save();
        $question_id = $question->id;
        $answers = $request->answers;
        $no =1;
        foreach ($answers as $data) {
            // echo $no++."<br>";
            $nos = $no++;
            $newAnswer = new Answers;
            $newAnswer->answer = $data;
            $newAnswer->id_question = $question_id;
            $newAnswer->true = $nos == $answer ? 1 : 0;
            $newAnswer->save();
            // echo $nos." = ".$answer."<br>";

        }        

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

        $title = "Edit Modul";
        $url = $this->url;

        $data = Material::find($id);

        $subjects = Subjects::all();
        return view('modules/edit',compact('title','url','id','data','subjects'));
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
