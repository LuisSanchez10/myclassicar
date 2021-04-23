<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class AdminCmsController extends Controller
{
    public function index(){
        return View('cms.login');
    }

    public function login(Request $r){
        
        // return $request;
        $usuario = $r->usuario;
        $clave = $r->clave;
    
        if($clave == '1*2*3' && $usuario == 'admin'){
            session(['admin' => 'true']);
            return redirect('/cms');
        }
        return redirect("/admin");

        // return View('cms.login');
    }

    public function destroy(){
        Session::forget('admin') ;// Removes a specific variable
        return redirect("/admin");
    }

}
