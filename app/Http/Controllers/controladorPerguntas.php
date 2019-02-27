<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\perguntasFaq;

class controladorPerguntas extends Controller
{
    
    /* AUTENTICAÇÃO
    public function __construct(){
        $this->middleware('auth');
    }*/
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perguntas = perguntasFaq::all();
        return view('perguntas', compact('perguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novaPergunta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pergunta = new perguntasFaq();
        $pergunta->pergunta = $request->input('pergunta');
        $pergunta->resposta = $request->input('resposta');
        $pergunta->save();
        return redirect('/duvidas-frequentes');
        
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
        $pergunta = perguntasFaq::find($id);
        if (isset($pergunta)){
            return view('editarPergunta', compact('pergunta'));
        }
        return redirect('duvidas-frequentes');
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
        $pergunta = perguntasFaq::find($id);
        if (isset($pergunta)){
            $pergunta->pergunta = $request->input('pergunta');
            $pergunta->resposta = $request->input('resposta');  
            $pergunta->save();
        }
        
        return redirect('duvidas-frequentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pergunta = perguntasFaq::find($id);
        if (isset($pergunta)){
            $pergunta->delete();
        }
        return redirect('duvidas-frequentes');
    }

    // API
    public function perguntas()
    {
        $perguntas = perguntasFaq::all();
        return response()->json($perguntas);
    }
    
}
