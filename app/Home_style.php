<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_style extends Model
{
    public function vehicle_style()
    {
        return $this->belongsTo('App\Vehicle_style');
    }
    
}
