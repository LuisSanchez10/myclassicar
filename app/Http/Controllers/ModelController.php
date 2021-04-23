<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\_Model;

class ModelController extends Controller
{

    public function por_marca($idmarca){
        //busco modelos de vehiculos por marca
        $modelos = _Model::where('brand_id', $idmarca)->get();
        return $modelos ;
    }
}
