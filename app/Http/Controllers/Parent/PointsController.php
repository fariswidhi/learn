<?php 
namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use App\Material;
use App\Subjects;
use Auth;


class PointsController extends AnotherClass
{
	
	public function index(){
		return view('dashboard/point');
	}
}