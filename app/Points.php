<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    //
    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
    public function module(){

    	return $this->belongsTo('App\Modules','id_module');	
    }
}
