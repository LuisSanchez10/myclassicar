<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar el modelo que se usara en la clase
use Illuminate\Support\Facades\Storage;
use App\Vehicle_style;
use Str;

class StylesController extends Controller
{
    public function create(Request $request)
    {
        if ($request->hasFile('fotoEstilo')) {
            $path_imagen = $request->file('fotoEstilo')->store('public');
            //nombre de la imagen
            $file_imagen = Str::replaceFirst('public/', '', $path_imagen);
            //instanciando el modelo correspondiente a los estilos
            $estilo = new Vehicle_style;
            //asigno el texto del estilo al campo
            $estilo->vehicle_style = $request->estilo;
            $estilo->imagen_home = $file_imagen;
            //inhabilito q se guarde con timestamp
            $estilo->timestamps = false;
            //guardo los datos en BBDD
            $validate = $estilo->save();
            //verifico si se guardo en BD
            if ($validate) {
                return redirect('/cms/estilos');
            }
        }
    }

    public function update(Request $request, $id)
    {        
        //busco el slider q se quiere editar
        $estilo = Vehicle_style::findOrFail($id);
        //manipulo la imagen
        if ($request->hasFile('fotoEstilo')) {
            //guardo la imagen
            $path_imagen = $request->file('fotoEstilo')->store('public');
            //nombre de la imagen
            $imagen_logo = Str::replaceFirst('public/', '', $path_imagen);
            $band = 1;
            //elimino la foto
            //Storage::delete('file.jpg');
        } else {
            $band = 0;
        }
        //instanciando el modelo correspondiente a los estilos
        $estilo = new Vehicle_style;
        //guardo los valores del formulario
        $estilo_name = $request->estilo;
        $estilo->timestamps = false;
        //actualizo los campos
        if ($band == 1) {
            $estilo->where("id",$id)->update(["vehicle_style" => $estilo_name,"imagen_home" => $imagen_logo]);
        } else {
            $estilo->where("id",$id)->update(["vehicle_style" => $estilo_name]);
        }
        return redirect('/cms/estilos');
    }
    public function destroy($id)
    {
        //busca la marca en el modelo
        $estilo= Vehicle_style::findOrFail($id);
        //otengo el nombre de la imagen de la imagen
        $imagen_estilo = $estilo->imagen_home;
        //elimino la imagen del directorio
        Storage::delete("/public/$imagen_estilo");
        //elimina el registro en BD
        $estilo->delete();
        //retorna la vista
        return redirect('/cms/estilos');
    }
}
