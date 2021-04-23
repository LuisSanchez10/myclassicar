<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_photo extends Model
{
    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }

    public function photo_type()
    {
        return $this->belongsTo('App\Photo_type');
    }
}
