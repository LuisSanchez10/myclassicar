<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    public function publications(){
        return $this->hasMany('App\Publication');
    }
}
