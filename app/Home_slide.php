<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_slide extends Model
{
    //este comando hace q los campos de la tabla se puedan editar, por defecto Laravel no permite editarlos
    protected $fillable = ['title','subtitle','photo_slide','color1','color2','order','status'];
}
