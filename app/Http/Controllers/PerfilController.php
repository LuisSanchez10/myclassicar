<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Publication;
use App\_Model;
use App\Brand;
use App\Vehicle;
use App\Question;
use App\Answer;
use App\Plan;
use App\Ubication;
use File;
use Hash;
class PerfilController extends Controller


{
    //Main vista perfil
    public function PerfilView(){
        $user = User::find(auth()->user()->id);
        $plan = $user->plan;
        $marcas = Brand::all();
        $modelos = _Model::all();
        $publicaciones = Publication::where('user_id', $user->id)->get();
        $ubicaciones = Ubication::all();
        //preguntas que el usuario a hecho a una publicacion
        $preguntasEnviadas = Question::where('user_id', $user->id)->get();
       
        //preguntas que le han hecho a la publicacion del usuario
        $preguntasRecibidas  = [];

        //foreach para guardar preguntas en el array
        foreach ($publicaciones as $publicacion) {
            $preguntas = $publicacion->questions;
            
            foreach ($preguntas as $pregunta) {
                $preguntasRecibidas[] = $pregunta;
            }
        }


        return view('vista_perfil')->with(compact('user', 'publicaciones', 'marcas', 'modelos', 'preguntasEnviadas', 'preguntasRecibidas', 'ubicaciones', 'plan'));
    }

    public function PerfilViewSeccion($seccion){
        $user = User::find(auth()->user()->id);
        $plan = $user->plan;
        $marcas = Brand::all();
        $modelos = _Model::all();
        $publicaciones = Publication::where('user_id', $user->id)->get();
        $ubicaciones = Ubication::all();
        //preguntas que el usuario a hecho a una publicacion
        $preguntasEnviadas = Question::where('user_id', $user->id)->get();
       
        //preguntas que le han hecho a la publicacion del usuario
        $preguntasRecibidas  = [];

        //foreach para guardar preguntas en el array
        foreach ($publicaciones as $publicacion) {
            $preguntas = $publicacion->questions;
            
            foreach ($preguntas as $pregunta) {
                $preguntasRecibidas[] = $pregunta;
            }
        }
      
        return view('vista_perfil')->with(compact('user', 'publicaciones', 'marcas', 'modelos', 'preguntasEnviadas', 'preguntasRecibidas', 'ubicaciones', 'plan', 'seccion'));
    }
    
    //cambio de contraseña ***** FALTA ARCHIVO DE VERIFICACION****
    public function ChangePassword(Request $request){
        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $user = auth()->user();

        if($user->password === null){
            if(isset($new_password)){
                $user->password = Hash::make($new_password);
                $user->save();
            }
        } else {

            if(Hash::check($old_password, auth()->user()->password)){
                $user->password = Hash::make($new_password);
                $user->save();
            }
        }

        return redirect()->route('perfil.seccion', 2);
        // return back();

    }


    public function LoadingPerfilImage(Request $request){

        $file = $request ->file('perfil_image');

        //Obtenemos el usuario loggeado
        $user = User::find($request->user_id);
        
        //verificamos si el campo imagen tiene algo y eliminamos
        if($user->imagen_logo){
            if(substr($user->imagen_logo, 0, 4)  === "http"){
                $deleted = true;
            } else {
                $fullpath = public_path() . '/perfil_logos/' . $user->imagen_logo;
                $deleted = File::delete($fullpath);
            }
        }
        
        //verificacion de que se haya eliminado la imagen o que no exista el en el campo
        if(isset($deleted) || $user->imagen_logo === null){

            //verificamos que la imagen exista
            if($file){
                $path = public_path() . '/perfil_logos';
                $fileName = uniqid() . $file->getClientOriginalName();
                $moved = $file->move($path, $fileName);
    
                //verificamos que la imagen haya sido movida y guardamos la ruta
                if($moved){
                    $user->imagen_logo = $fileName;
                    $user->save();
                }

                return redirect()->route('perfil.seccion', 1);
                // return back();
            }
        }

        
    }

    //actualizando datos del usuario
    public function update(Request $request){
        $user = User::find($request->user_id);  

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'phone_secondary' => $request->phone_secondary,
            'ubication_id' => $request->ubicacion,
        ]);

        return back();

    }


    public function pausarPublicacionStatus(Request $request, $id){
        if($request->wantsJson()) {
            $publicacion = Publication::find($id);
            $publicacion->status_publication_id = 0;
            $publicacion->save();

            return 'pausada';
        } else {
            return view('home');
        }
    }

    public function activePublicacionStatus(Request $request, $id){
        if($request->wantsJson()) {
            $publicacion = Publication::find($id);
            $publicacion->status_publication_id = 1;
            $publicacion->save();

            return 'activada';
        } else {
            return view('home');
        }
    }



    // ------------------------------AXIOS CALLS PERFIL-------------------------------------


// llamada axios general
    public function getPublicaciones(Request $request){
        
        //entra la llamada  por axios
        if($request->wantsJson()) {
            $idPublicacion = $request->id;
            $user = auth()->user()->id;

        //verificamos el status de publicacion y traemos las publicaciones
            if($idPublicacion == 1){

                $publicaciones = Publication::where('status_publication_id', '=', 1)
                    ->where('user_id', $user)
                    ->get();

                // se crea un array y se recorre las publicaciones
                $mainQuery = [];
                foreach ($publicaciones as $publicacion) {

                    //buscamos el año, modelo,photo y las adjuntamos en un objeto junto con la publicacion
                    $year = $publicacion->vehicle->version->year;
                    $modelo = $publicacion->vehicle->model->model;
                    $photo = $publicacion->car_photos->first();

                    $query = [
                        "publicacion" => $publicacion,
                        "year" => $year,
                        "modelo" => $modelo,
                        "photo" => $photo,
                    ];

                    //guardamos el objeto en el array
                    $mainQuery[] = $query;

                }  

                return $mainQuery;

        //mismo proceso que el anterior
            } else if($idPublicacion == 0){

                $publicaciones = Publication::where('status_publication_id', '=', 0)
                    ->where('user_id', $user)
                    ->get();

                $mainQuery = [];
                foreach ($publicaciones as $publicacion) {
                    $year = $publicacion->vehicle->version->year;
                    $modelo = $publicacion->vehicle->model->model;
                    $photo = $publicacion->car_photos->first();

                    $query = [
                        "publicacion" => $publicacion,
                        "year" => $year,
                        "modelo" => $modelo,
                        "photo" => $photo,
                    ];

                    $mainQuery[] = $query;

                }

                return $mainQuery;


        //mismo proceso que el anterior
            } else if($idPublicacion == 3){
                $publicaciones = Publication::where('status_publication_id', '=', 3)
                    ->where('user_id', $user)
                    ->get();

                $mainQuery = [];
                foreach ($publicaciones as $publicacion) {
                    $year = $publicacion->vehicle->version->year;
                    $modelo = $publicacion->vehicle->model->model;
                    $photo = $publicacion->car_photos->first();

                    $query = [
                        "publicacion" => $publicacion,
                        "year" => $year,
                        "modelo" => $modelo,
                        "photo" => $photo,
                    ];

                    $mainQuery[] = $query;

                }

                return $mainQuery;

            }
        } else {

            return view('home');

        }

    }

  //llamada axios filtro de marcas
    public function getFilter(Request $request, $marca = null){
        if($request->wantsJson()) {
            // Obtenemos la marca, encontramos los vehiculos y traemos los modelos
            $marca = Brand::find($marca);
            $carros = $marca->vehicles;
            $user = auth()->user()->id;
            $modelos = $marca->models;
            $publicaciones = [];

            //obtenemos las publicaciones a través de los vehiculos
            foreach ($carros as $carro) {

                foreach ($carro->publications->where('status_publication_id', '=', $request->id) as $publicacion) {
                    
                    //verificamos las publicaciones que pertenecen al usuario loggeado
                    if($publicacion->user_id == $user){

                        //guardamos el año,modelo,photo junto a la publicacion en un objeto
                        $year = $carro->version->year;
                        $modelo = $carro->model->model;
                        $photo = $publicacion->car_photos->first();
                         $publicacionQuery = [
                            "publicacion" => $publicacion,
                            "year" => $year,
                            "modelo" => $modelo,
                            "photo" => $photo,
                        ];

                        //guardamos el objeto en un array de publicaciones
                        $publicaciones[] = $publicacionQuery;
                    }
                }
            }

            // retornamos las publicaciones y los modelos para los selectores
            return $query = [
                "publicaciones" => $publicaciones,
                "modelos" => $modelos,
            ];
        }
    }
  
  //llamada axios filtro por modelo
    public function getFilterModel(Request $request, $model = null ){
        if($request->wantsJson()) {
            $user = auth()->user()->id;


            //obtenemos el vehiculos con el id del modelo
            $carros = Vehicle::where('model_id', $model)->get();
            $publicaciones = [];

            //obtenemos las publicaciones a través del vehiculo 
            foreach ($carros as $carro) {

                foreach ($carro->publications->where('status_publication_id', '=', $request->id) as $publicacion) {
                   
                    //verificamos las publicaciones que pertenecen al usuario loggeado
                    if($publicacion->user_id == $user){
                        $year = $carro->version->year;
                        $modelo = $carro->model->model;
                        $photo = $publicacion->car_photos->first();
                         $publicacionQuery = [
                            "publicacion" => $publicacion,
                            "year" => $year,
                            "modelo" => $modelo,
                            "photo" => $photo,
                        ];
                        //guardamos el objeto en un array de publicaciones
                        $publicaciones[] = $publicacionQuery;
                    }
                }
            }

            //retornamos las publicaciones
            return $publicaciones;
        }
    }       
}
