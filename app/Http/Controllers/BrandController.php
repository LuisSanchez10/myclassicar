<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importar el modelo que se usara en la clase
use Illuminate\Support\Facades\Storage;
use App\Brand;
use Str;

class BrandController extends Controller
{
    public function create(Request $request)
    {
        //guardo los datos en BBDD
        //Almacenar las imagenes en el directorio
        if ($request->hasFile('fotoMarca')) {
            $path_imagen = $request->file('fotoMarca')->store('public');
            //nombre de la imagen
            $file_imagen = Str::replaceFirst('public/', '', $path_imagen);
            //almacenar ruta de acceso en base de datos
            //instanciando el modelo correspondiente a los estilos
            $marca = new Brand;
            //asigno el texto del estilo al campo
            $marca->brand = $request->marca;
            $marca->imagen_logo = $file_imagen;
            $marca->vin_code = "h4d5";
            //inhabilito q se guarde con timestamp
            $marca->timestamps = false;
            $validate = $marca->save();
            //verifico si se guardo en BD
            if ($validate) {
                return redirect('/cms/marcas');
            }
        }
    }

    public function update(Request $request, $id)
    {
        //busco el slider q se quiere editar
        $brand = Brand::findOrFail($id);
        //manipulo la imagen
        if ($request->hasFile('fotoMarca')) {
            //guardo la imagen
            $path_imagen = $request->file('fotoMarca')->store('public');
            //nombre de la imagen
            $imagen_logo = Str::replaceFirst('public/', '', $path_imagen);
            $band = 1;
            //elimino la foto
            //Storage::delete('file.jpg');
        } else {
            $band = 0;
        }
        //instanciando el modelo correspondiente a los estilos
        $marca = new Brand;
        //guardo los valores del formulario
        $brand = $request->marca;
        $vin_code = "h4d5";
        $marca->timestamps = false;
        //actualizo los campos
        if ($band == 1) {
            $marca->where("id", $id)->update(["brand" => $brand, "imagen_logo" => $imagen_logo, "vin_code" => $vin_code]);
        } else {
            $marca->where("id", $id)->update(["brand" => $brand, "vin_code" => $vin_code]);
        }
        return redirect('/cms/marcas');
    }

    public function destroy($id)
    {
        //busca la marca en el modelo
        $marca = Brand::findOrFail($id);
        //otengo el nombre de la imagen de la imagen
        $imagen_marca = $marca->imagen_logo;
        //elimino la imagen del directorio
        Storage::delete("/public/$imagen_marca");
        //elimina el registro en BD
        $marca->delete();
        //retorna la vista
        return redirect('/cms/marcas');
    }
}
