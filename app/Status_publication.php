<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_publication extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status_publication';

    public function publications()
    {
        return $this->hasMany('App\Publication');
    }
}
