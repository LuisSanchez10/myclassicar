<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Version;

class VersionController extends Controller
{
   public function version_year_modelo ($year, $idmodelo){
       $veriones = Version::where([['year', $year],['model_id', $idmodelo], ])->get();
       return $veriones;
   }
   
   public function segmento_segun_version($id_version){
       $version = Version::where('id', $id_version)->first();
       //obtengo el segmento
       $segmento = $version->vehicle_type;
       return $segmento;
   } 
}
