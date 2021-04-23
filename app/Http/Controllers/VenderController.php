<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Color;
use App\Fuel;
use App\Car_interior;
use App\Ubication;
use App\City;
use App\Publication;
use App\User;
use App\_Model;
use App\Vehicle;
use App\Vehicle_style;
use App\Car_photo;
use Str;

class VenderController extends Controller

{
    public function index(){
        $marcas = Brand::All();
        $colores  = Color::All();
        $combustibles = Fuel::All();
        $interiores = Car_interior::All();
        $ubicaciones = Ubication::All();
        $ciudades = City::All();
        $estilos_de_vehiculo = Vehicle_style::All();
        return view('vender', [
            "marcas"=> $marcas,
            "colores"=>$colores,
            "combustibles"=>$combustibles,
            "interiores"=>$interiores,
            "ubicaciones"=>$ubicaciones,
            "ciudades"=>$ciudades,
            "estilos_de_vehiculo"=>$estilos_de_vehiculo,
                ]);
    }

    public function publicar(Request $request){
        
        
        // return $request;
        
        $publicacion = new Publication;
        $vehiculo = Vehicle::where([
            ['brand_id',$request->marca],
            ['model_id',$request->modelo],
            ['version_id', $request->version],
            ] )->first();
            //guardar publicacion 
        $publicacion->user_id = $request->usuario_id;
        $publicacion->vehicle_id = $vehiculo->id;
        $publicacion->kilometres = (int)$request->kilometros;
        $publicacion->fuel_id = $request->combustible;
        $publicacion->transmission_id = $request->transmision;
        $publicacion->color_id = $request->color;
        $publicacion->car_interior_id = $request->interior;
        $publicacion->vehicle_style_id = $request->estilo_vehiculo;
        $publicacion->description = $request->descripcion;
        $publicacion->price = $request->precio;
        $publicacion->currency_id = $request->moneda;
        $publicacion->ubication_id = $request->ubicacion;
        $publicacion->city_id = $request->ciudad;
        $publicacion->vin = $request->vin;
        $publicacion->status_publication_id = '1' ; //estatus pendiente.
        $publicacion->save();
        
        //Almacenar las imagenes en el directorio
        if ($request->hasFile('foto-frente')){
            $path_frente = $request->file('foto-frente')->store('public');
            $file_frente = Str::replaceFirst('public/', '',$path_frente);
            //almacenar ruta de acceso en base de datos
            $foto1 = new Car_photo;
            $foto1->publication_id = $publicacion->id;
            $foto1->car_photo = $file_frente;
            $foto1->photo_type_id = '1'; //foto de frente
            $foto1->timestamps = false;
            $foto1->save();
        }
        if ($request->hasFile('foto-detras')){
            $path_detras = $request->file('foto-detras')->store('public');
            $file_detras = Str::replaceFirst('public/', '',$path_detras);
            //almacenar ruta de acceso en base de datos
            $foto2 = new Car_photo;
            $foto2->publication_id = $publicacion->id;
            $foto2->car_photo = $file_detras;
            $foto2->photo_type_id = '2'; //foto de frente
            $foto2->timestamps = false;
            $foto2->save();
        }
        if ($request->hasFile('foto-lado-izq')){
            $path_lado_izq = $request->file('foto-lado-izq')->store('public');
            $file_lado_izq = Str::replaceFirst('public/', '',$path_lado_izq);
            //almacenar ruta de acceso en base de datos
            $foto3 = new Car_photo;
            $foto3->publication_id = $publicacion->id;
            $foto3->car_photo = $file_lado_izq;
            $foto3->photo_type_id = '3'; //foto de frente
            $foto3->timestamps = false;
            $foto3->save();
        }
        if ($request->hasFile('foto-lado-der')){
            $path_lado_der = $request->file('foto-lado-der')->store('public');
            $file_lado_der = Str::replaceFirst('public/', '',$path_lado_der);
            //almacenar ruta de acceso en base de datos
            $foto4 = new Car_photo;
            $foto4->publication_id = $publicacion->id;
            $foto4->car_photo = $file_lado_der;
            $foto4->photo_type_id = '4'; //foto de frente
            $foto4->timestamps = false;
            $foto4->save();
        }
        if ($request->hasFile('foto-interior')){
            $path_interior = $request->file('foto-interior')->store('public');
            $file_interior = Str::replaceFirst('public/', '',$path_interior);
            //almacenar ruta de acceso en base de datos
            $foto5 = new Car_photo;
            $foto5->publication_id = $publicacion->id;
            $foto5->car_photo = $file_interior;
            $foto5->photo_type_id = '5'; //foto de frente
            $foto5->timestamps = false;
            $foto5->save();
        }
        if ($request->hasFile('foto-motor')){
            $path_motor = $request->file('foto-motor')->store('public');
            $file_motor = Str::replaceFirst('public/', '',$path_motor);
            //almacenar ruta de acceso en base de datos
            $foto6 = new Car_photo;
            $foto6->publication_id = $publicacion->id;
            $foto6->car_photo = $file_motor;
            $foto6->photo_type_id = '6'; //foto de frente
            $foto6->timestamps = false;
            $foto6->save();
        }
        if ($request->hasFile('foto-opcional')){
            $path_opcional = $request->file('foto-opcional')->store('public');
            $file_opcional = Str::replaceFirst('public/', '',$path_opcional);
            //almacenar ruta de acceso en base de datos
            $foto7 = new Car_photo;
            $foto7->publication_id = $publicacion->id;
            $foto7->car_photo = $file_opcional;
            $foto7->photo_type_id = '7'; //foto de frente
            $foto7->timestamps = false;
            $foto7->save();
        }
        
        // $marcas = Brand::All();
        // $estilos = Vehicle_style::All();
        return redirect("felicitaciones/{$publicacion->id}");
        //crear publicacion 
    }

}
