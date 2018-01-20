<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use Auth;
use App\Material;

class SubjectController extends Controller
{

    private $url = "subject";


    public function detail($param){
        // $
        return view('dashboard/'.$this->url.'/detail');
    }
}
