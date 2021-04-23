<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cities';

    public function ubication()
    {
        return $this->belongsTo('App\Ubication');
    }
    public function publications(){
        return $this->hasMany('App\Publication');
    }
}
