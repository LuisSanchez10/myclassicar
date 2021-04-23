<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
class SocialController extends Controller
{



    public function GoogleActive(Request $request){

        $id = $request->user_id;
        $usuario = User::find($id);
        $google_verification = $request->google_active;
       
        if(auth()->user()->id === $usuario->id){
            
            if($usuario->google_sesion === 0 && $google_verification == 1){
                $usuario->google_sesion = $google_verification;
                $usuario->save();
                return Socialite::driver('google')->redirect();
            } elseif($usuario->google_sesion === 1){
                return back();
            }
        } 

        

    }


    public function FacebookActive(Request $request){

        $id = $request->user_id;
        $usuario = User::find($id);
        $facebook_verification = $request->facebook_active;

        if(auth()->user()->id === $usuario->id){

            if($usuario->facebook_sesion === 0 && $facebook_verification == 1){
                $usuario->facebook_sesion = $facebook_verification;
                $usuario->save();
                return Socialite::driver('facebook')->redirect();
            
            } elseif($usuario->facebook_sesion === 1){
                return back();

            } else {
                return back();
            }
        } 
    }
}
