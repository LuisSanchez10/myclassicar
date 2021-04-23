<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['user_id', 'publication_id', 'question', 'status_question_id' ];
    
    public function status_question()
    {
        return $this->belongsTo('App\Status_question');
    }
    public function publication()
    {
        return $this->belongsTo('App\Publication');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function answer()
    {
        return $this->hasOne('App\Answer');
    }

    public function answers(){
        return $this->hasMany('App\Answer');
    }
}
