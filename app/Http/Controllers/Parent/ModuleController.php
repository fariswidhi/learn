<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use App\Material;
use App\Subjects;
use Auth;
use App\Modules;
use App\Questions;
use App\Answers;

class ModuleController extends Controller
{
    public function create(){
        $subjects = Subjects::all();
        return view('dashboard/question/create-module',compact('subjects'));
    }

    public function store(Request $request){
                $class = new Modules;
        $class->name = $request->name;
        $class->time = $request->time;
        $class->description = $request->description;
        $class->id_subjects = $request->subjects;
        $class->subject_number = $request->number;
        $class->id_user = Auth::id();
        $save = $class->save();

        $chars = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');

            $removeName = strtolower(str_replace($chars, "", $request->name));
            $permalink = strtolower(str_replace(' ','-',$removeName));

        if ($save == true) {
            $request->session()->flash('success', 'success');
            return redirect('panel/soal/'.$permalink.'-'.$class->id);
        }
    }

    public function detail($params,Request $request){
        // print_r($request->method());

        $explode = explode('-', $params);
        $id = end($explode);
        $data = Modules::find($id);
        if ($request->isMethod('GET')) {
        $questions = Questions::where('id_module',$id)->get();
        $param = $params;
        $no =1 ;
        return view('dashboard/question/detail-module',compact('data','questions','id','param','no'));

        }
        else{

            $data->delete();
            return redirect('/panel/daftar-soal/dari-saya');
        }
        // print_r($request->method());

    }

    public function addQuestions(Request $request,$id){
        $explode = explode('-', $id);
        $id = end($explode);

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
$request->session()->flash('success', 'Berhasil Menambah Data');
return redirect()->back();
    }

    public function delete($param,$id){
    $find = Questions::find($id)        ;
    $find->delete();
    return redirect()->back();
    }
    public function detailQuestion($param,$id){
        // $explode = explode('-', $param);
        // $id = end($explode);

        $data = Questions::find($id);
        $answers = Answers::where('id_question',$id)->get();

        // print_r($data);
        return view('dashboard/question/detail-questions',compact('data','answers'));
    }

}
