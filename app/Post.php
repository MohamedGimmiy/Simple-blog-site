<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    Public function User(){
        return $this->belongsTo('App\User');
    }
}
