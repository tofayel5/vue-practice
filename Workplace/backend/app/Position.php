<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function Users(){
        return $this->hasMany('App\User');
    }
    public function department(){
        return $this->belongsTo('App\Department');
    }
}
