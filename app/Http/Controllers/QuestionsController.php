<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function deleteQuestion(Request $request, $id){
	    if($request->wantsJson()) {
	    	$pregunta = Question::find($id);
	    	if($pregunta->answers){
	    		foreach ($pregunta->answers as $respuesta) {
	    			$respuesta->delete();
	    		}
	    	}

	    	$pregunta->delete();

	    	return 'success';
	    }
    }
}
