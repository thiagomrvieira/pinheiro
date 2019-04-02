<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mapa;

class controladorMapa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapa = Mapa::all();
        return view('mapa', compact('mapa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('novoMapa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mapa = new Mapa();
        $mapa->titulo = $request->input('titulo');
        $mapa->texto = $request->input('texto');
        $mapa->link = $request->input('link');
        
        $arquivo = $request->file('arquivo');
        $nome = $input['imagename'] = time() . "." . $arquivo->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('arquivosMapa');
        $arquivo->move($destinationPath, $input['imagename']);
        
        $mapa->arquivo = $caminho . DIRECTORY_SEPARATOR . $nome;
        $mapa->save();
        return redirect('/mapa');
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
        $mapa = Mapa::find($id);
        if (isset($mapa)) {
            return view('editarMapa', compact('mapa'));
        }



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
        $mapa = Mapa::find($id);
        if (isset($mapa)) {
            $mapa->titulo = $request->input('titulo');
            $mapa->texto = $request->input('texto');
            $mapa->link = $request->input('link');
            
            $arquivo = $request->file('arquivo');
            $nome = $input['imagename'] = time() . "." . $arquivo->getClientOriginalExtension();
            $caminho = $destinationPath = public_path('arquivosMapa');
            $arquivo->move($destinationPath, $input['imagename']);
            
            $mapa->arquivo = $caminho . DIRECTORY_SEPARATOR . $nome;
            $mapa->save();
            return redirect('/mapa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $mapa = Mapa::find($id);
        if (isset($mapa)) {
            $mapa->delete();
        }
        return redirect('mapa');
    }

    // API
    public function mapa()
    {
        $mapa = Mapa::all();
        return response()->json($mapa);
    }

}
