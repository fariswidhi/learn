<?php

namespace App\Http\Controllers\Kids;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use Auth;
use App\Material;
use App\Subjects;
use App\Modules;

class QuestionsController extends Controller
{

    private $url = "subject";


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

    public function detail($params){
echo "string";
    }


}
