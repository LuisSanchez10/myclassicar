<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;

class AnswerController extends Controller
{
    public function perfilQuestionsAnswers(Request $request){

	    if($request->wantsJson()) {

	    	if(isset($request->answer)){
	    		$respuesta = new Answer;
	    		$respuesta->question_id = $request->question;
	    		$respuesta->answer = $request->answer;
	    		$respuesta ->save();

	    		$respuestas = Answer::where('question_id', '=', $request->question)->get();

	    		$count = count($respuestas);
	    		return response([
	    			'message' => 'Respuesta enviada',
	    			'respuesta' => $request->answer,
	    			'count' => $count,
	    		], 200);

	    	}


    	}

    }
}
