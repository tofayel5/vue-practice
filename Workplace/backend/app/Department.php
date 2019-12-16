<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function Positions(){
        return $this->hasMany('App\Position');
    }
}
