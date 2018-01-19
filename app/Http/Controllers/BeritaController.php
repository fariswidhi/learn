<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class BeritaController extends Controller
{
	private $url;
    public function index(){
    	$title = "News";
        $no = 1;
        $url = $this->url;
    	$datas = News::all();
    	$data1 = News::first();
    	$data2 = News::orderBy('created_at', 'desc')->paginate(3);
    	return view('berita', compact('datas','data1','data2'));
    	// print_r($data1);
    }
    public function store($id){
    	// return view('user.profile', ['user' => User::findOrFail($id)]);
    	return view('detailb', ['data' => News::findOrFail($id)]);
    }
}
