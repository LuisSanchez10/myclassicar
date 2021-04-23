<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    public function model()
    {
        return $this->belongsTo('App\_Model');
    }
    public function version()
    {
        return $this->belongsTo('App\Version');
    }
    public function publications(){
        return $this->hasMany('App\Publication');
    }
}
