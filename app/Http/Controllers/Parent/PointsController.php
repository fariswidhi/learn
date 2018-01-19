<?php 
namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Childrens;
use App\Material;
use App\Subjects;
use Auth;
use App\Points;
use App\User;

class PointsController 
{
	
	public function index(){
		$id = Auth::id();
		$data = User::where('id_parent',$id)->get();

		$arr = [];
		foreach ($data as $d) {
			# code...
			$arr[] = [
			$d->id
			];
		}

		$points = Points::whereIn('id_user',$arr)->get();


		$no=1;
		return view('dashboard/point',compact('points','no'));
	}
}