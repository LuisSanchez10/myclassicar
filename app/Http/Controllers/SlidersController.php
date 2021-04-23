<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_slide;
use Illuminate\Support\Facades\Storage;
use Str;

class SlidersController extends Controller
{
    public function update(Request $request, $id)
    {        
        //busco el slider q se quiere editar
        $slider = Home_slide::findOrFail($id);
        //manipulo la imagen
        if ($request->hasFile('fotoCarInput')) {
            //guardo la imagen
            $path_imagen = $request->file('fotoCarInput')->store('public');
            //nombre de la imagen
            $photo_slide = Str::replaceFirst('public/', '', $path_imagen);
            $band=1;
            //elimino la foto
            //Storage::delete('file.jpg');
        }else{
            $band=0;
        }    
        //instanciando el modelo correspondiente a los estilos
        $slider = new Home_slide;
        //guardo los valores del formulario
        $title = $request->titulo;
        $subtitle = $request->subtitulo;
        $color1 = $request->color1Form;
        $color2 = $request->color2Form;
        $slider->timestamps = false;
        //actualizo los campos
        if($band==1){
            $slider->where("id",$id)->update(["title" => $title, "subtitle" => $subtitle, "photo_slide" => $photo_slide, "color1" => $color1, "color2" => $color2]);
        }else{
            $slider->where("id",$id)->update(["title" => $title, "subtitle" => $subtitle, "color1" => $color1, "color2" => $color2]);
        }     
        return redirect('/cms');
    }

    //funcion para mostrar u ocultar los sliders    
    public function showSlider(Request $request, $id)
    {
        //busco el slider q se quiere editar
        $slider = Home_slide::findOrFail($id);
        //guardo los valores del formulario
        $band=$request->band;
        $slider->timestamps = false;
        //actualizo los campos
        if($band==1){
            $slider->where("id",$id)->update(["status" => 1]);
        }else{
            $slider->where("id",$id)->update(["status" => 0]);
        }     
        return redirect('/cms');
    }
}
