<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    public function publications(){
        return $this->hasMany('App\Publication');
    }
}
