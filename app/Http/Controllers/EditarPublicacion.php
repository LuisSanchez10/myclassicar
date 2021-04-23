<?php

namespace App\Http\Controllers;
use App\Publication;
use App\Brand;
use App\Color;
use App\Fuel;
use App\Car_interior;
use App\Car_photo;
use App\Ubication;
use App\City;
use App\Vehicle_style;
use App\Vehicle;
use Illuminate\Http\Request;
use Storage; 
use Str; 

class EditarPublicacion extends Controller
{
    function show(Request $request, $id){
        $marcas = Brand::All();
        $colores  = Color::All();
        $combustibles = Fuel::All();
        $interiores = Car_interior::All();
        $ubicaciones = Ubication::All();
        $ciudades = City::All();
        $estilos_de_vehiculo = Vehicle_style::All();
    	$publicacion = Publication::find($id);
    	$user = auth()->user();
    	if($publicacion->user_id == $user->id){
    		return view('vender_editar')->with(compact(
				'publicacion',
				'marcas', 
    			'colores', 
    			'combustibles',
    			'interiores',
    			'ubicaciones',
    			'ciudades',
    			'estilos_de_vehiculo'));
    	} else {
    		return view('home');
    	}
	}
	
	public function update(Request $request, $id){


		// return $request;
		$user = auth()->user();
		$publicacion = Publication::find($id);
		if($publicacion->user_id == $user->id){
			//la publicacion le pertene al usuario
			$vehiculo = Vehicle::where([
				['brand_id',$request->marca],
				['model_id',$request->modelo],
				['version_id',$request->version],
				] )->first();
			// return $vehiculo;
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
			// $publicacion->status_publication_id = '1' ; //estatus pendiente.
			$publicacion->save();

			if( $request->delete_frente == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',1);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
			}else{
				//Almacenar las imagenes en el directorio
				if ($request->hasFile('foto-frente')){
					//eliminar imagen type = 1
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',1);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
							$path_old = $value->car_photo;
							Storage::delete(['file', $path_old]);
							$path_frente = $request->file('foto-frente')->store('public');
							$file_frente = Str::replaceFirst('public/', '',$path_frente);
							$foto1 = Car_photo::find($value->id);
							//almacenar ruta de acceso en base de datos
							$foto1->publication_id = $publicacion->id;
							$foto1->car_photo = $file_frente;
							$foto1->photo_type_id = '1'; //foto de frente
							$foto1->timestamps = false;
							$foto1->save();
						}
					}else{
						$path_ = $request->file('foto-frente')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '1'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}

				}
				
			}
			
			if($request->delete_detras  == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',2);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
				unset($path_fotos_old);
			}else{
				if ($request->hasFile('foto-detras')){
					//eliminar imagen type = 2
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',2);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
						$path_old = $value->car_photo;
						Storage::delete(['file', $path_old]);
							$path_ = $request->file('foto-detras')->store('public');
							$file_ = Str::replaceFirst('public/', '',$path_);
							//almacenar ruta de acceso en base de datos
							$foto = Car_photo::find($value->id);
							$foto->publication_id = $publicacion->id;
							$foto->car_photo = $file_;
							$foto->photo_type_id = '2'; //foto de frente
							$foto->timestamps = false;
							$foto->save();
						}
					}else{
						$path_ = $request->file('foto-detras')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '2'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}
					unset($path_fotos_old);
				}
			}
			
			if($request->delete_lado_izq  == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',3);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
				unset($path_fotos_old);
				
			}else{
				if ($request->hasFile('foto-lado-izq')){
					//eliminar imagen type = 3
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',3);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
							$path_old = $value->car_photo;
							Storage::delete(['file', $path_old]);
							$path_ = $request->file('foto-lado-izq')->store('public');
							$file_ = Str::replaceFirst('public/', '',$path_);
							//almacenar ruta de acceso en base de datos
							$foto = Car_photo::find($value->id);
							$foto->publication_id = $publicacion->id;
							$foto->car_photo = $file_;
							$foto->photo_type_id = '3'; 
							$foto->timestamps = false;
							$foto->save();
						}
					}else{
						$path_ = $request->file('foto-lado-izq')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '3'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}
					unset($path_fotos_old);
				}
			}	
			
	
			if($request->delete_lado_der  == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',4);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
				unset($path_fotos_old);

			}else{
				if ($request->hasFile('foto-lado-der')){
					//eliminar imagen type = 3
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',4);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
							$path_old = $value->car_photo;
							Storage::delete(['file', $path_old]);
							$path_ = $request->file('foto-lado-der')->store('public');
							$file_ = Str::replaceFirst('public/', '',$path_);
							//almacenar ruta de acceso en base de datos
							$foto = Car_photo::find($value->id);
							$foto->publication_id = $publicacion->id;
							$foto->car_photo = $file_;
							$foto->photo_type_id = '4'; 
							$foto->timestamps = false;
							$foto->save();
						}
					}else{
						$path_ = $request->file('foto-lado-der')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '4'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}
					unset($path_fotos_old);
				}
			}	
			
			if($request->delete_interior  == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',5);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
				unset($path_fotos_old);
			}else{
				if ($request->hasFile('foto-interior')){
					//eliminar imagen type = 3
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',5);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
							$path_old = $value->car_photo;
							Storage::delete(['file', $path_old]);
							$path_ = $request->file('foto-interior')->store('public');
							$file_ = Str::replaceFirst('public/', '',$path_);
							//almacenar ruta de acceso en base de datos
							$foto = Car_photo::find($value->id);
							$foto->publication_id = $publicacion->id;
							$foto->car_photo = $file_;
							$foto->photo_type_id = '5'; 
							$foto->timestamps = false;
							$foto->save();
						}
					}else{
						$path_ = $request->file('foto-interior')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '5'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}
					unset($path_fotos_old);
				}
			}	
			
			if($request->delete_motor  == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',6);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
				unset($path_fotos_old);

			}else{
				if ($request->hasFile('foto-motor')){
					//eliminar imagen type = 3
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',6);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
							$path_old = $value->car_photo;
							Storage::delete(['file', $path_old]);
							$path_ = $request->file('foto-motor')->store('public');
							$file_ = Str::replaceFirst('public/', '',$path_);
							//almacenar ruta de acceso en base de datos
							$foto = Car_photo::find($value->id);
							$foto->publication_id = $publicacion->id;
							$foto->car_photo = $file_;
							$foto->photo_type_id = '6'; 
							$foto->timestamps = false;
							$foto->save();
						}
					}else{
						$path_ = $request->file('foto-motor')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '6'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}
					unset($path_fotos_old);
				}
			}	

			if($request->delete_opcional  == "true" ){
				$path_fotos_old = $publicacion->car_photos->where('photo_type_id',7);
				foreach ($path_fotos_old as $key => $value) {
					$path_old = $value->car_photo;
					Storage::delete(['file', $path_old]);
					$value->delete();
				}
				unset($path_fotos_old);

			}else{
				if ($request->hasFile('foto-opcional')){
					//eliminar imagen type = 3
					$path_fotos_old = $publicacion->car_photos->where('photo_type_id',7);
					if (count($path_fotos_old)>0){
						foreach ($path_fotos_old as $key => $value) {
							$path_old = $value->car_photo;
							Storage::delete(['file', $path_old]);
							$path_ = $request->file('foto-opcional')->store('public');
							$file_ = Str::replaceFirst('public/', '',$path_);
							//almacenar ruta de acceso en base de datos
							$foto = Car_photo::find($value->id);
							$foto->publication_id = $publicacion->id;
							$foto->car_photo = $file_;
							$foto->photo_type_id = '7'; 
							$foto->timestamps = false;
							$foto->save();
						}
					}else{
						$path_ = $request->file('foto-opcional')->store('public');
						$file_ = Str::replaceFirst('public/', '',$path_);
						//almacenar ruta de acceso en base de datos
						$foto = new Car_photo;
						$foto->publication_id = $publicacion->id;
						$foto->car_photo = $file_;
						$foto->photo_type_id = '7'; //foto de frente
						$foto->timestamps = false;
						$foto->save();
					}
					unset($path_fotos_old);
				}
			}	
		}

        return redirect()->route('perfil.seccion',3);

    }
}
