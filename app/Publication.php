<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
    public function Fuel()
    {
        return $this->belongsTo('App\Fuel');
    }
    public function transmission()
    {
        return $this->belongsTo('App\Transmission');
    }
    public function color()
    {
        return $this->belongsTo('App\Color');
    }
    public function car_interior()
    {
        return $this->belongsTo('App\Car_interior');
    }
    public function vehicle_style()
    {
        return $this->belongsTo('App\Vehicle_style');
    }
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
    public function ubication()
    {
        return $this->belongsTo('App\Ubication');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
    public function status_publication()
    {
        return $this->belongsTo('App\Status_publication');
    }

    public function car_photos()
    {
        return $this->hasMany('App\Car_photo');

    }

    public function questions(){
        return $this->hasMany('App\Question');
    }


    public function getKilometresFormatAttribute($value){
         return number_format($this->kilometres, 0, ',','.');
    }
}
