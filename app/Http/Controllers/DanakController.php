<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanakController extends Controller
{
    public function index()
    {
    	return view('dashboard.danak');
    }
}
