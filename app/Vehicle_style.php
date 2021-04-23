<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle_style extends Model
{
    public function home_style()
    {
        return $this->hasOne('App\Home_style');
    }
}
