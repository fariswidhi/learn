<?php

namespace App\Http\Controllers\Kids;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use Auth;
use App\Material;
use App\Subjects;
use App\Modules;
use App\Activities;
use App\Questions;
use DB;
use Session;
use App\Answers;


class QuestionsController extends Controller
{

    private $url = "subject";

    public function __construct()
    {
        $this->middleware('auth');
        //Do your magic here
    }

    public function index(){
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


    	return view('dashboard/question/index',compact('data'));
    }
    public function show($param)
    {
        //
        $no = 1;
        $explode = explode('-', $param);
        $id = end($explode);
        $material = Modules::where('id_subjects',$id)->get();

        $data = [];
        $chars = array ('{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','-','/','\\',',','.','#',':',';','\'','"','[',']');

        foreach ($material as $m) {
            $name = $m->name;
            $removeName = strtolower(str_replace($chars, "", $name));
            $permalink = strtolower(str_replace(' ','-',$removeName));
            $data[] = [
            'name'=>$name,
            'permalink'=>$permalink,
            'id'=>$m->id,
            'time'=>$m->time,
            ];
        }

           $param = $param;


        return view('dashboard/question/detail',compact('no','data','param'));
    }

    public function detail($params,$str){
        $explode = explode('-', $str);
        $id = end($explode);
        $data = Modules::find($id);
        $subject = $data->subject->name;
        $time = $data->time;
        $param1 = $params; 
        $param2 = $str;
		return view('dashboard/question/question-detail',compact('data','time','subject','param1','param2'));
    }

    public function start($params,$str){
    	//  $explode = explode('-', $str);
     //    $id = end($explode);
    	// // $class = new Activities;
    	// // $class->id_children = Auth::id();
    	// // $class->activity =  "Mengerjakan Soal";
    	// // // 1= baca
    	// // // 2= mengerjakan
    	// // $class->type = 2;
    	// // $class->id= $id;
    	// // $class->save();
        // $current =  URL::current();
        $explode = explode('-', $str);
        $id = end($explode);
        $limit = Modules::find($id)->subject_number;

        Session::put('subject_number',$limit);
        $limitsess =  Session::get('subject_number');
        // echo $limitsess;
        $data = Questions::where('id_module',$id)->orderBy(DB::raw('RAND()'))->limit($limit)->get();
        // return $data->toJson();
        $arr = [];
        foreach ($data as $d) {
            # code...
            $arr [] = [
            'id'=>$d->id
            ];
        }


// echo $limitsess;

        Session::push('user.questions', $arr);
    
        $current = "dashboard/question/".$params."/".$str;
    	return view('dashboard/question/start',compact('current'));
    }

    public function listQuestions($params,$str){
        // Session::flush();

    $questions = Session::get('user.questions');

        // echo count($questions);
        // echo $limitsess;
        // print_r(Session::all());
    //     if ($limitsess != count($questions)) {
// echo $limitsess;

    //     }
    //     else{


//                 $count = count($questions[0]);
// echo count($questions[0]);

//  if ($count == 0) {
//                  Session::push('user.questions', $arr);
//             if ($limitsess != count($questions)) {
                 // Session::push('user.questions', $arr);
//             }
//             else{
                    // Session::flush();
//             }
//     }
    // if (count($questions) > 0 ) {
    //     Session::flush();
    // }
    // else{

    // }
// elseif (count($questions) > 1) {

// }

    // if (count($questions) == 1) {
    $datas = [];
    foreach ($questions[0] as $value) {
        # code...
        // echo $n++;
        // print_r($n++);
        // echo count($value);
        // print_r($value);
        // print_r($value['id']);
        
        $datas[] = [
        'id'=>$value['id']
        ];
    }
    // print_r(Session::all());
    echo json_encode($datas);


    // }
// print_r($questions);

    # code...
}

public function getQuestionById($id){
    $question = Questions::find($id);
    $data = Answers::where('id_question',$id)->get();

    $arr = [];

    foreach ($data as $d) {

        $arr[] = [
        'id'=>$d->id,
        'data'=>$d->answer
        ];
    }


    $json = [
    'subject'=>$question->name,
    'answer'=>$arr
    ];
    
    echo json_encode($json);
}
public function getAnswerById($id){


}


}
