<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help_topic extends Model
{
    public function help_titles(){
        return $this->hasMany('App\Help_title');
    }
}
