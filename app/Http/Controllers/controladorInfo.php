<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Info;
use App\Orgao;

class controladorInfo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informacoes = Info::all();
        return view('informacoes', compact('informacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orgaos = Orgao::all();
        return view('novaInfo', compact('orgaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $informacao = new Info();
        $informacao->titulo = $request->input('titulo');
        $informacao->texto = $request->input('texto');
        $informacao->orgao_id = $request->input('orgao');
        $informacao->save();
        return redirect('atuacao-integrada');
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
        $orgaos = Orgao::all();

        $informacao = Info::find($id);
        if (isset($informacao)) {
            return view('editarInfo', compact('informacao', 'orgaos'));
        }


        return redirect('atuacao-integrada');

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
        $informacao = Info::find($id);
        if (isset($informacao)) {
            $informacao->titulo = $request->input('titulo');
            $informacao->texto = $request->input('texto');
            $informacao->orgao_id = $request->input('orgao');
            $informacao->save();
           }
           return redirect('atuacao-integrada');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informacoes = Info::find($id);
        if (isset($informacoes)) {
            $informacoes->delete();
        }
        return redirect('atuacao-integrada');
    }

     // API
     public function informacoes()
     {
         $informacoes = Info::all();
         return response()->json($informacoes);
     }
}
