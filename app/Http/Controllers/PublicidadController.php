<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads_text;

class PublicidadController extends Controller
{
    public function update(Request $request)
    {
        //instanciando el modelo correspondiente a los estilos
        $ads = new Ads_text;
        //guardo los valores del formulario
        $id= $request->id;
        $title = $request->title;
        $subtitle = $request->subtitle;
        $ads->timestamps = false;
        //actualizo los campos
        $ads->where("id", $id)->update(["title" => $title, "subtitle" => $subtitle]);
        return redirect('/cms/publicidad');
    }
}
