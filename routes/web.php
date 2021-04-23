<?php

use Illuminate\Support\Facades\Route;
use App\Home_slide;
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
use App\Ads_text;
use App\Help_topic;
use App\Help_title;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home
Route::get('/', function () {
    $marcas = Brand::All();
    $estilos = Vehicle_style::All();
    $sliders = Home_slide::All();
    $publicidad = Ads_text::All(); 
    $publicaciones = Publication::All();
    return view('home', [
        "marcas" => $marcas,
        "estilos" => $estilos,
        "sliders" => $sliders->where('status', 1),
        "publicidad" => $publicidad,
        "publicaciones" => $publicaciones,
    ]);
})->name('main');

Route::get('/felicitaciones/{id_nueva_publicacion}', function ($id_nueva_publicacion) {
    $marcas = Brand::All();
    $estilos = Vehicle_style::All();
    $publicacion = Publication::find($id_nueva_publicacion);
    $sliders = Home_slide::All();
    $publicidad = Ads_text::All(); 
    $publicaciones = Publication::All();
    return view('home', [
        "marcas"=> $marcas,
        "estilos"=> $estilos,
        "sliders" => $sliders,
        "publicidad" => $publicidad,
        "publicaciones" => $publicaciones,
        "nueva_publicacion"=>$publicacion,
            ]);
});

// ruta de testeo
Route::get('test', function() {
    echo 'vista admin';
})->middleware('admin');


//Vista de perfil
Route::get('perfil', 'PerfilController@PerfilView')->middleware('auth')->name('perfil');
Route::post('perfil/upload/img', 'PerfilController@LoadingPerfilImage')->middleware('auth');
Route::post('perfil/password/update', 'PerfilController@ChangePassword')->middleware('auth');
Route::post('perfil/update',  'PerfilController@update')->middleware('auth');

//get publicaciones perfil
Route::get('perfil/publicaciones', 'PerfilController@getPublicaciones');
Route::get('perfil/publicaciones/{marca?}', 'PerfilController@getFilter')->where('marca', '[0-9]+');
Route::get('perfil/publicaciones/model/{model?}', 'PerfilController@getFilterModel')->where('model', '[0-9]+');

//acciones publicacion vista perfil
Route::post('perfil/pausa/{id}', 'PerfilController@pausarPublicacionStatus')->where('id', '[0-9]+');
Route::post('perfil/active/{id}', 'PerfilController@activePublicacionStatus')->where('id', '[0-9]+');
Route::post('perfil/publication/delete/{id}', 'PublicationController@DestroyPublicacion')->where('id', '[0-9]+');

Route::post('perfil/question/delete/{id}', 'QuestionsController@deleteQuestion')->where('id', '[0-9]+');
Route::post('perfil/answer', 'AnswerController@perfilQuestionsAnswers')->middleware('auth');

//secciones de perfil 
Route::get('perfil/seccion/{id}', 'PerfilController@PerfilViewSeccion')->middleware('auth')->name('perfil.seccion');

//vista publicacion
Route::get('publicacion/{id}', 'PublicationController@show')->where('id', '[0-9]+')->name('publicacion');
Route::get('publicacion/question/{id}', 'PublicationController@getQuestionsAwnsers')->where('id', '[0-9]+');
Route::post('publicacion/enviar', 'PublicationController@makeQuestions');


Route::get('/search', 'HomeController@getSearch');
//sliders CMS
Route::get('/cms', function () {
    $sliders = Home_slide::All();
    return view('/cms/banners', [
        "sliders" => $sliders
    ]);
})->middleware('admin');
Route::put('/editsliderscms/{id}', 'SlidersController@update')->where('id', '[0-9]+');
Route::put('/slidershidden/{id}', 'SlidersController@showSlider')->where('id', '[0-9]+');
//destacados CMS
Route::get('/cms/destacados', function () {
    $publicaciones = Publication::All();
    return view('cms/destacados', compact('publicaciones'));
})->middleware('admin');

//Marcas CMS
Route::get('/cms/marcas', function () {
    $marcas = Brand::All();
    return view('cms/marcas', [
        "marcas" => $marcas
    ]);

})->middleware('admin');

//Ayuda CMS
Route::group(['prefix' => 'cms'], function () {
    Route::resource('ayuda', 'AyudaController')->middleware('admin');
});
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::post('/savebrand', 'BrandController@create');
Route::put('/editbrand/{id}', 'BrandController@update')->where('id', '[0-9]+');
Route::post('/deletebrand/{id}', 'BrandController@destroy')->where('id', '[0-9]+');
// Estilos CMS
Route::get('/cms/estilos', function () {
    $estilos = Vehicle_style::All();
    return view('cms/estilos', [
        "estilos" => $estilos
    ]);
})->middleware('admin');
Route::post('/savestyle', 'StylesController@create');
Route::put('/editstyle/{id}', 'StylesController@update')->where('id', '[0-9]+');
Route::post('/deletestyle/{id}', 'StylesController@destroy')->where('id', '[0-9]+');
//Publicidad CMS
Route::get('/cms/publicidad', function () {
    $publicidad = Ads_text::All();
    return view('cms/publicidad', [
        "publicidad" => $publicidad
    ]);
})->middleware('admin');
Route::put('/publicidadUpdate', 'PublicidadController@update');
// vista de comprar
Route::get('comprar', 'ComprarController@index');
Route::get('comprar/price', 'ComprarController@getByPrice');
Route::get('comprar/km', 'ComprarController@getByKm');
Route::get('comprar/year', 'ComprarController@getByYear');
Route::get('comprar/search', 'ComprarController@search');

//vender 
Route::get('vender',  'VenderController@index')->middleware('auth');
//rutas de vender producto
Route::post('VenderController', 'VenderController@publicar')->middleware('auth');
Route::get('editar/{id}', 'EditarPublicacion@show')->where('id', '[0-9]+')->middleware('auth');
Route::put('editar/{id}', 'EditarPublicacion@update')->where('id', '[0-9]+')->middleware('auth')->name('update.publicacion');

Route::get('planes', function () {
    return view('planes');
});
Route::get('ayuda', function () {
    $topicos = Help_topic::All(); 
    return view('ayuda', compact('topicos'));
});
Route::get('ayuda/{id_topico}', function ($topico) {
    $topico = Help_topic::find($topico);
    return view('ayuda_topico', compact('topico', 'titulos'));
})->name('ayuda.topicos');

Route::get('/ayuda/titulo/{titulo}', function ($titulo) {
    $titulo = Help_title::where('help_title', $titulo)->get();
    return view('ayuda_titulo', compact('titulo'));
})->name('ayuda.titulo');


Route::get('/comprando', function () {
    return view('ayuda_comprando');
});
Route::get('/como-reservar-un-auto', function () {
    return view('ayuda_comprandor_reserva_auto');
});

Auth::routes();

// Inicio de sesión con facebook
Route::get('/auth/facebook', 'Auth\LoginController@LoginWithFacebookRedirect');
Route::get('/auth/facebook/callback', 'Auth\LoginController@LoginWithFacebookCallback');

//inicio de sesion con google
Route::get('/auth/google', 'Auth\LoginController@LoginWithGoogleRedirect');
Route::get('/auth/google/callback', 'Auth\LoginController@LoginWithGoogleCallback');


//Vinculacion Redes Sociales
Route::post('/verification/google', 'SocialController@GoogleActive');
Route::post('/verification/facebook', 'SocialController@FacebookActive');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas de modelos
Route::get('model/{idmarca}', 'ModelController@por_marca');

//ruta para capturar ciudades segun la ubicacion 
Route::get('ciudades/{idubicacion}', 'CityController@ciudades_por_ubicacion');

//rutas para versiones de vehiculo y su segmento
Route::get('version/{year}/{idmodelo}', 'VersionController@version_year_modelo');
Route::get('segmento/{idversion}', 'VersionController@segmento_segun_version');

Route::get('/admin','AdminCmsController@index' )->name('admin');
Route::post('/admin/login','AdminCmsController@login' );
Route::get('/admin/cerrar','AdminCmsController@destroy' );
