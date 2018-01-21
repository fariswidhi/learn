<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Material extends Model
{
    //
           use SoftDeletes;
           public function subject(){
           	return $this->belongsTo('App\Subjects','id_subject');
           }
}
