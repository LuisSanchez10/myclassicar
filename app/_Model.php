<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _Model extends Model
{
    //debido a que la clase Model es igual a la Model de laravel, genera error porlo que se cambio.
    protected $table = 'models';

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
    public function versions(){
        return $this->hasMany('App\Version', 'model_id');
    }
    public function vehicles(){
        return $this->hasMany('App\Vehicles');
    }
}
