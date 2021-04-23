<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'currencies';

    public function publications(){
        return $this->hasMany('App\Publication');
    }
}
