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
use App\UsersAnswer;
use App\UsersQuestions;
use App\Points;

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

         $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
$code = '';
 $max = strlen($characters) - 1;
 for ($i = 0; $i < 7; $i++) {
      $code .= $characters[mt_rand(0, $max)];
 }

$validation = UsersAnswer::where('sessid',$code)->count();
if ($validation != 0) {
 for ($i = 0; $i < 7; $i++) {
      $code .= $characters[mt_rand(0, $max)];
 }
 $sessid = strtoupper($code);
}else{
    $sessid = strtoupper($code);
}





        // Session::forget('sessid');
        Session::put('sessid',$sessid);
        
        $sessid =  Session::get('sessid');
            Session::put('sessid',$sessid);
        if (empty($sessid)) {
            Session::put('sessid',$sessid);
        }
        

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
        $sessid = Session::get('sessid');

        $explode = explode('-', $str);
        $id = end($explode);
        $limit = Modules::find($id)->subject_number;

        Session::put('subject_number',$limit);
        $limitsess =  Session::get('subject_number');
        // echo $limitsess;
        // return $data->toJson();



        $arr = [];

        $questions = Questions::where('id_module',$id)->orderBy(DB::raw('RAND()'))->limit($limit);
        $questionCount = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>Auth::id()])->count();

        if ($questionCount == 0) {
            # code...

        $data = $questions->get();
        foreach ($data as $d) {
            # code...
            // $arr [] = [
            // 'id'=>$d->id
            // ];

        $count = UsersQuestions::where(['sessid'=>$sessid,'id_question'=>$d->id])->count();
        if ($count ==0 ) {
            # code...

        $class = new UsersQuestions;
        $class->id_module = $id;
        $class->sessid = $sessid;
        $class->id_question = $d->id;
        $class->id_user = Auth::id();
        $class->save();
        }
        }

        }
        // $d = [];

        // $d = [
        // 'data'=>$arr,
        // 'max'=>max($arr),
        // 'min'=>min($arr)
        // ];


// // echo $limitsess;

        // Session::push('user.questions', $d);
        // Session::flush();
        $current = "dashboard/question/".$params."/".$str;
    	return view('dashboard/question/start',compact('current'));
    }

    public function listQuestions($params,$str){
        $sessid =  Session::get('sessid');
        $userid = Auth::id();
        $data = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>$userid])->get();
        // $min = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>$userid])->min('id_question');
        // $max = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>$userid])->max('id_question');
    $datas = [];
    $num = 0;
        

    $max = count($data)-1;
    $min = 0;

    foreach ($data as $value) {
        # code...
        // echo $n++;
        // print_r($n++);
        // echo count($value);
        // print_r($value);
        // print_r($value['id']);
        // $a= $num++;
        // $min[] = [
        //     $a
        // ];
        // print_r($min);
        $answered = UsersAnswer::where(['id_children'=>Auth::id(),'id_question'=>$value->id,'sessid'=>$sessid])->count();

        $datas[] = [
        'iduser'=>$value->id,
        'id'=>$value->id_question,
        'max'=> $num == $max ? 'true':'false',
        'min'=> $num == $min ? 'true':'false',
        'num'=>$num++,
        'answered'=>$answered == 0 ? 'false' :'true'
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
    $dataAnswer = Answers::where('id_question',$id)->get();
    // $userAnswer = UsersAnswer::where(['id_question'=>$id,'id_children'=>Auth::id()])->first();
    // $answer = $userAnswer->id_answer;
    $sessid = Session::get('sessid');
    $find = UsersQuestions::where(['id_question'=>$id,'id_user'=>Auth::id(),'sessid'=>$sessid])->first();
    $ids = $find->id;


// echo $id;
    $arr = [];
        $data = UsersAnswer::where(['id_question'=>$ids,'id_children'=>Auth::id(),'sessid'=>$sessid])->first();
        $count = UsersAnswer::where(['id_question'=>$ids,'id_children'=>Auth::id(),'sessid'=>$sessid])->count();
        // echo ;
        // $id_answer = $data->id_answer;
    foreach ($dataAnswer as $d) {


        $arr[] = [
        'id'=>$d->id,
        'data'=>$d->answer,
        'selected'=> $count == 0 ? 'false' : $d->id != $data->id_answer ? $d->id:'true'
        ];
    }


    $json = [
    'subject'=>$question->name,
    'answer'=>$arr
    ];
    
    echo json_encode($json);
}
public function insertAnswer(Request $request){
    $sessid = Session::get('sessid');
    $id_children = Auth::id();
    $id_question = $request->question;
    $id_answer  = $request->id;
    $data = UsersAnswer::where(['id_children'=>$id_children,'id_question'=>$id_question,'sessid'=>$sessid]);


    $count = $data->count();
// echo $count;

    // print_r($count);
    // echo $getId;
    // echo $point;
    // echo $id_question;


    $d = UsersQuestions::where('id',$id_question)->first();
    // echo $d->usersQuestions();
    $question = $d->id_question;

    $answer = Answers::where(['id_question'=>$question,'true'=>1])->first();
    $true = $answer->id;
    if ($count ==0 ) {
    $class = new UsersAnswer;
    $class->id_children = $id_children;
    $class->id_question = $id_question;
    $class->id_answer = $id_answer;
    $class->sessid = $sessid;
    $class->point = $id_answer == $true ? $point : 0;
    $class->on_going = 1; 
    $class->save();


    $full = 100;
    $id_module = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>Auth::id()])->first()->id_module;
    $subject_no = Modules::find(1)->subject_number;    
    $point = 100/$subject_no;

            $find = UsersAnswer::where(['id_question'=>$id_question,'id_children'=>Auth::id(),'sessid'=>$sessid])->first();
        // $getId = $data->first()->id;
        $class = UsersAnswer::find($find->id);
        $class->id_answer = $id_answer;
        $class->point = $id_answer == $true ? $point : 0;
        $class->save();

    }
    else{
        // echo $getI;

         $d = UsersQuestions::where('id',$id_question)->first();
    // echo $d->usersQuestions();
    $question = $d->id_question;

    $answer = Answers::where(['id_question'=>$question,'true'=>1])->first();
    $true = $answer->id;
    $full = 100;
    $id_module = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>Auth::id()])->first()->id_module;
    $subject_no = Modules::find(1)->subject_number;    
    $point = 100/$subject_no;

            $find = UsersAnswer::where(['id_question'=>$id_question,'id_children'=>Auth::id(),'sessid'=>$sessid])->first();


        $find = UsersAnswer::where(['id_question'=>$id_question,'id_children'=>Auth::id(),'sessid'=>$sessid])->first();
        // $getId = $data->first()->id;
        $class = UsersAnswer::find($find->id);
        $class->id_answer = $id_answer;
        $class->point = $id_answer == $true ? $point : 0;
        $class->save();
    }
}

public function end(){
    $sessid = Session::get('sessid');
    $userid = Auth::id();

    // $data = UsersAnswer::where(['id_children'=>$userid,'sessid'=>$sessid])->sum('point')->groupBy('sessid')->get();
$data = DB::table("users_answers")->select(DB::raw("SUM(point) as count"))->groupBy(DB::raw("sessid"));                                                                                                     $score = $data->first()->count;

    
    $id_module = UsersQuestions::where(['sessid'=>$sessid,'id_user'=>Auth::id()])->first()->id_module;

    $point = new Points;
    $point->id_module =$id_module;
    $point->sessid = $sessid;
    $point->point = $score;
    $point->id_user = $userid;
    $point->save();


    Session::forget('sessid');
    $response = [
    'success'=>'true',
    'point'=>$score
    ];
    echo json_encode($response);




}


}
