<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Str;
use Hash;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        return response([
            "message" => 'iniciada',
        ],200);
    }

    //LOGIN CON FACEBOOK

    public function LoginWithFacebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function LoginWithFacebookCallback()
    {
        $auth_user = Socialite::driver('facebook')->user();
        
        $userVerification = User::where('email', $auth_user->email)->first();

        if($userVerification){

            //verificacion de la vinculacion de la red social
            switch ($userVerification->facebook_sesion) {
                case 1:
                    Auth::login($userVerification, true);
                    break;
                
                default:
                    return redirect('/');
                    break;
            }

        } else {

            $newUser                  = new User;
            $newUser->name            = $auth_user->name;
            $newUser->email           = $auth_user->email;
            $newUser->facebook_sesion   = true;
            $newUser->imagen_logo     = $auth_user->getAvatar();
            $newUser->save(); 
            Auth::login($newUser, true);
            
        }
        return redirect()->to('/perfil');
    }

    //LOGIN CON GOOGLE
    
    public function LoginWithGoogleRedirect(){
       
        return Socialite::driver('google')->redirect();
    }

    public function LoginWithGoogleCallback()
    {
        $auth_user = Socialite::driver('google')->user();

        $userVerification = User::where('email', $auth_user->email)->first();

        if($userVerification){

            //verificacion de la vinculacion de la red social
            switch ($userVerification->google_sesion) {
                case 1:
                    Auth::login($userVerification, true);
                    break;
                
                default:
                    return redirect('/');
                    break;
            }

        } else {
            $newUser                  = new User;
            $newUser->name            = $auth_user->name;
            $newUser->email           = $auth_user->email;
            $newUser->google_sesion   = true;
            $newUser->imagen_logo     = $auth_user->getAvatar();
            $newUser->save(); 
            Auth::login($newUser, true);
            
        }
        return redirect()->to('/perfil');

    }


}
