<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersAnswer extends Model
{
    //
        use SoftDeletes;
        public function usersQuestions(){
        	$this->belongsTo('App\UsersQuestions','id_question');
        }
}

