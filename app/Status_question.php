<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_question extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status_question';

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
