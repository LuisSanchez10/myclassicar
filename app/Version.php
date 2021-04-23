<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    public function model()
    {
        return $this->belongsTo('App\_Model');
    }
    public function vehicles(){
        return $this->hasMany('App\Vehicle');
    }
}
