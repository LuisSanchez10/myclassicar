<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_interior extends Model
{
    public function publications(){
        return $this->hasMany('App\Publication');
    }
}
