<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help_title extends Model
{
    public function help_topic()
    {
        return $this->belongsTo('App\Help_topic');
    }

}
