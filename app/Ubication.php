<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
   public function cities()
   {
       return $this->hasMany('App\City');
   }
   public function publications(){
    return $this->hasMany('App\Publication');
    }
    public function users(){
        return $this->hasMany('App\User');
    }
}
