<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\_Model;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getSearch(Request $request){

        $marcas = Brand::where('brand', 'LIKE', $request->buscar.'%')->limit(3)->get();
        $modelos = _Model::where('model', 'LIKE', $request->buscar.'%')->limit(3)->get();
        

        return $query = [
            "marcas" => $marcas,
            "modelos" => $modelos,
        ];
    }
}
