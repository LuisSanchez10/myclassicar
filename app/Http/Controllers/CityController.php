<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function ciudades_por_ubicacion($ubicacion_id){
        $ciudades = City::where('ubication_id', $ubicacion_id)->get();
        return $ciudades;
    }
}
