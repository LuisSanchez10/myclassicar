<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Help_topic;
use App\Help_title;

class AyudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulos = Help_title::All();
        return view('cms/ayuda', compact('titulos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topicos = Help_topic::All();
        return view('cms/crear_ayuda', compact('topicos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $titulo_ayuda =  new Help_title;
        $titulo_ayuda->help_topic_id = $request->topico;
        $titulo_ayuda->help_title = $request->titulo;
        $titulo_ayuda->help_html = $request->contenido;
        $titulo_ayuda->timestamps = false;
        $titulo_ayuda->save();

       return redirect()->route('ayuda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topicos = Help_topic::All();
        $titulo_ayuda = Help_title::find($id);
        return view('cms/crear_ayuda', compact('topicos', 'titulo_ayuda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // return $request;
         $titulo_ayuda = Help_title::find($id);
         $titulo_ayuda->help_topic_id = $request->topico;
         $titulo_ayuda->help_title = $request->titulo;
         $titulo_ayuda->help_html = $request->contenido;
         $titulo_ayuda->timestamps = false;
         $titulo_ayuda->save();
 
        return redirect()->route('ayuda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Help_title::destroy($id);
        return redirect()->route('ayuda.index');
    }
}
