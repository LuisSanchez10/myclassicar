<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\Question;
class PublicationController extends Controller
{
    public function show($id){
    	$producto = Publication::find($id);
        $randoms  =  Publication::inRandomOrder()->where('status_publication_id', 1)->limit(3)->get();
    	return view('vista_publicacion')->with(compact('producto', 'randoms'));
    }

    public function DestroyPublicacion(Request $request, $id){
        if($request->wantsJson()) {
            $user = auth()->user();
            $publicacion = Publication::find($id);
            if($user->id == $publicacion->user_id){
                $publicacion->delete();
                return 'eliminada';
            }
        }
    }


    public function getQuestionsAwnsers(Request $request, $id){
    	if($request->wantsJson()) {
    		$publicacion = Publication::find($id);
    		$dudas = $publicacion->questions;
    		$query = [];
    		foreach ($dudas as $duda) {
    			$asistencia = [
    				'pregunta' => $duda,
    				'respuesta' => $duda->answer,
    			];
    			$query[] = $asistencia;
    		}

    		return $query;
    	} else {
    		return view('home');
    	}
    }


    public function makeQuestions(Request $request){
    	if($request->wantsJson()) {
			$pregunta = new Question;
			$pregunta->user_id = auth()->user()->id;
			$pregunta->publication_id = $request->producto;
			$pregunta->status_question_id = 1;
			$pregunta->question = $request->question;

			$pregunta->save();

			return $pregunta;
		} else {
			return view('home');
		}

		// Nota: alli en el reques estan los datos que enviaste tanto el id como el mensaje,  por cierto debe agregar el id del usuario logeado. 
	}

}
