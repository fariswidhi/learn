<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    public function answers(){
    	return $this->belongsTo('App\Answers','id');
    }
}
