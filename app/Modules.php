<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Modules extends Model
{
    //
    
        use SoftDeletes;

        public function subject(){
        	return $this->belongsTo('App\Subjects','id_subjects');
        }
}
