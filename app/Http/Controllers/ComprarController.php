<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Publication;
use App\Brand;
use App\Vehicle;
use App\Vehicle_style;
use App\Version;


//LEER PRIMER METODO DEL CONTROLLADOR PARA USO DE LA PAGINACION


class ComprarController extends Controller
{
    public function index(Request $request){

    // Filtrado por marca
        $url = '';
    	if(isset($request->marca)){

    		//trae una collección de vehiculos
    		$vehicles = Vehicle::where('brand_id', $request->marca)->get();
    		$publicaciones = [];
    		//recorrer vehiculos para poder recorrer las colecciones de publicaciones
    		foreach($vehicles as $vehicle){

    			foreach ($vehicle->publications as $publicacion) {
    				if($publicacion->status_publication_id == 1){
    					$publicaciones[] = $publicacion;
    				}
    			}
    		}
            //obtenemos la url y ruta, agregamos el parametro si existe para la paginación
            $url = $request->url().'?marca='.$request->marca;

            $filtros = true;

         // en caso de no haber filtrado      		
    	} else if (isset($request->tipo)) {
            $tipo_publicaciones = Publication::where('Vehicle_style_id', $request->tipo)->where('status_publication_id', 1)->get();
            $publicaciones = [];
            foreach ($tipo_publicaciones as $tipo_publicacion) {
                $publicaciones[] = $tipo_publicacion;
            }

            $url = $request->url().'?tipo='.$request->tipo;

            $filtros = true;

        } else if (isset($request->modelo))  {
            $carros = Vehicle::where('model_id', $request->modelo)->get();
            $publicaciones = [];

            //obtenemos las publicaciones a través del vehiculo 
            foreach ($carros as $carro) {

                foreach ($carro->publications  as $publicacion) {
                   
                    //verificamos que la publicacion exista
                    if($publicacion->status_publication_id == 1){
                        
                        $publicaciones[] = $publicacion;
                    }
                }
            }

            $filtros = true;
            $url = $request->url().'?modelo='.$request->modelo;

        }  else {
    		$publicaciones = Publication::inRandomOrder()->where('status_publication_id', 1)->get();
            $url = $request->url();

            $filtros = false;
    	}



    	$marcas = Brand::all();
        $tipos = Vehicle_style::all();
        $count = count($publicaciones);
        $items = collect($publicaciones);

//paginacion

        //cantida de elementos por pargina
        $perPage = 25;

        //numero de pagina que se renderizará
        if(isset($request->page)){
            $currentPage = $request->page;
        } else {
            $currentPage = 1;
        }

        //calculo para obtener los elementos
        $offset = ($currentPage * $perPage) - $perPage;

        //definimos el paginador
        $publicaciones = new LengthAwarePaginator(
            //obtener elementos dependiendo de la pagina
            $items->slice($offset, $perPage),
            //cantidad de elementos del array 
            $count,
            $perPage,
            $currentPage,
            //ruta de paginacion
            ['path' => $url]
        );

        

    	return view('comprar')->with(compact('publicaciones', 'marcas', 'tipos', 'count', 'filtros'));
    	
    }






//-------------------------------------- filtrado por precio ---------------------------------

    public function getByPrice(Request $request){
        
        // Maximo hasta
        if(isset($request->maximo)){

            $publicaciones = Publication::where('price', '<=', $request->maximo)->where('status_publication_id', 1)->get();
            
            $url = $request->url().'?maximo='.$request->maximo;
        //desde un precio hasta otro precio
        }else if ($request->desde && $request->hasta) {

            $desde = $request->desde;
            $hasta = $request->hasta;

            $publicaciones = Publication::whereBetween('price', [$desde, $hasta])->where('status_publication_id', 1)->get();
            
            $url = $request->url().'?desde='.$desde.'&hasta='.$hasta;
        //mas de un precio
        } else if ($request->masde){
            $publicaciones = Publication::where('price', '>', $request->masde)->where('status_publication_id', 1)->get();
            $url = $request->url().'?masde='.$request->masde;
        }

        $marcas = Brand::all();
        $tipos = Vehicle_style::all();
        $count = count($publicaciones);

        $items = collect($publicaciones);

        //paginacion
        $perPage = 25;

        //numero de pagina
        if(isset($request->page)){
            $currentPage = $request->page;
        } else {
            $currentPage = 1;
        }

        //calculo para obtener los elementos
        $offset = ($currentPage * $perPage) - $perPage;

        //definimos el paginador
        $publicaciones = new LengthAwarePaginator(
            //obtener elementos dependiendo de la pagina
            $items->slice($offset, $perPage), 
            $count,
            $perPage,
            $currentPage,
            ['path' => $url]
        );

        $filtros = true;

        return view('comprar')->with(compact('publicaciones', 'marcas', 'tipos', 'count', 'filtros'));

    }

//-------------------------------------- filtrado por kilometros ---------------------------------

    public function getByKm(Request $request){

        // Maximo
        if($request->maximo){
            $publicaciones = Publication::where('kilometres', '<=', $request->maximo)->where('status_publication_id', 1)->get();

        
            $url = $request->url().'?maximo='.$request->maximo;
        //desde un km hasta otro km    
        } else if ($request->desde && $request->hasta){

            $desde = $request->desde;
            $hasta = $request->hasta;

            $publicaciones = Publication::whereBetween('kilometres', [$desde, $hasta])->where('status_publication_id', 1)->get();

            $url = $request->url().'?desde='.$desde.'&hasta='.$hasta;
        }

        $marcas = Brand::all();
        $tipos = Vehicle_style::all();
        $count = count($publicaciones);
        $items = collect($publicaciones);

        //paginacion
        $perPage = 25;

        //numero de pagina
        if(isset($request->page)){
            $currentPage = $request->page;
        } else {
            $currentPage = 1;
        }

        //calculo para obtener los elementos
        $offset = ($currentPage * $perPage) - $perPage;

        //definimos el paginador
        $publicaciones = new LengthAwarePaginator(
            //obtener elementos dependiendo de la pagina
            $items->slice($offset, $perPage), 
            $count,
            $perPage,
            $currentPage,
            ['path' => $url]
        );

        $filtros = true;

        return view('comprar')->with(compact('publicaciones', 'marcas', 'tipos', 'count', 'filtros'));
    }


//-------------------------------------- filtrado por año ---------------------------------

    public function getByYear(Request $request){
        if($request->time){
            $years = Version::where('year', $request->time)->get();

            //vehiculos y publicacions array
            $vehicles = [];
            $publicaciones = [] ;


            // obtenemos los vehiculos de las colecciones
            foreach ($years as $year) {

                foreach ($year->vehicles as $vehicle) {
                    if($vehicle->id){
                        $vehicles[] = $vehicle;
                    }
                }
            }


            //recorremos cada vehiculo y obtenemos las publicaciones de las colecciones
            foreach($vehicles as $vehicle){

                if($vehicle->id){

                    foreach ($vehicle->publications as $publicacion) {


                        if($publicacion->status_publication_id == 1){
                            $publicaciones[] = $publicacion;
                        }


                    }

                }


            }
         $url = $request->url().'?time='.$request->time;   
        }

        $marcas = Brand::all();
        $tipos = Vehicle_style::all();
        $count = count($publicaciones);

        $items = collect($publicaciones);

        //paginacion
        $perPage = 25;

        //numero de pagina
        if(isset($request->page)){
            $currentPage = $request->page;
        } else {
            $currentPage = 1;
        }

        //calculo para obtener los elementos
        $offset = ($currentPage * $perPage) - $perPage;

        //definimos el paginador
        $publicaciones = new LengthAwarePaginator(
            //obtener elementos dependiendo de la pagina
            $items->slice($offset, $perPage), 
            $count,
            $perPage,
            $currentPage,
            ['path' => $url]
        );
        
        $filtros = true;

        return view('comprar')->with(compact('publicaciones', 'marcas', 'tipos', 'count', 'filtros'));
    }



//--------------------------------------Buscador del navbar ---------------------------------

    public function search(Request $request){

        $busqueda=$request->busqueda;
        $busqueda ='%'.$busqueda.'%';
        if(isset($busqueda)){
            //hacer la consulta
            $publicaciones = Publication::select('publications.*')
                ->join('vehicles', 'vehicles.id', '=', 'publications.vehicle_id')
                ->join('brands', 'brands.id', '=', 'vehicles.brand_id')
                ->join('models', 'models.id', '=', 'vehicles.model_id')
                ->join('versions', 'versions.id', '=', 'vehicles.version_id')
                ->join('transmissions', 'transmissions.id', '=', 'publications.transmission_id')
                ->join('fuels', 'fuels.id', '=', 'publications.fuel_id')
                ->join('car_interiors', 'car_interiors.id', '=', 'publications.car_interior_id')
                ->join('colors', 'colors.id', '=', 'publications.color_id')
                ->where('publications.description', 'like', $busqueda)
                ->where('status_publication_id', 1)
                ->orwhere('brands.brand', 'like', $busqueda)
                ->orwhere('models.model', 'like', $busqueda)
                ->orwhere('versions.version', 'like', $busqueda)
                ->orwhere('transmissions.transmission', 'like', $busqueda)
                ->orwhere('fuels.fuel', 'like', $busqueda)
                ->orwhere('car_interiors.car_interior', 'like', $busqueda)
                ->orwhere('colors.color', 'like', $busqueda)
                ->get();
            } else {
                $publicaciones = [];
            }

        $url = $request->url().'?busqueda='.$request->busqueda; 


        $marcas = Brand::all();
        $tipos = Vehicle_style::all();
        $count = count($publicaciones);

        $items = collect($publicaciones);

        //paginacion
        $perPage = 25;

        //numero de pagina actual
        if(isset($request->page)){
            $currentPage = $request->page;
        } else {
            $currentPage = 1;
        }

        //calculo para obtener los elementos
        $offset = ($currentPage * $perPage) - $perPage;

        //definimos el paginador
        $publicaciones = new LengthAwarePaginator(
            //obtener elementos dependiendo de la pagina
            $items->slice($offset, $perPage), 
            $count,
            $perPage,
            $currentPage,
            ['path' => $url]
        );
        
        $filtros = true;

        return view('comprar')->with(compact('publicaciones', 'marcas', 'tipos', 'count', 'filtros'));
    }

}
