<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name', 'description', 'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function project() {
        return $this->belongsTo('App\Project');
    }

    public function projects() {
        return $this->belongsToMany('App\Project');
    }

    public function reviews() {
        return $this->belongsToMany('App\Review');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }











}
