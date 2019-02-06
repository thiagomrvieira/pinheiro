<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\telefone;


class controladorTelefones extends Controller
{
    // AUTENTICAÇÃO
    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefones = telefone::all();
        return view('telefones', compact('telefones'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoTelefone');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telefone = new telefone();
        $telefone->nome = $request->input('orgao');
        $telefone->numero = $request->input('telefone');
        $telefone->competencias = $request->input('competencias');
        $telefone->save();
        return redirect('/telefones');
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
        $tel = telefone::find($id);
        if (isset($tel)){
            return view('editarTelefone', compact('tel'));
        }
        return redirect('telefones');
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
        $telefone = telefone::find($id);
        if (isset($telefone)){
            $telefone->nome = $request->input('orgao');
            $telefone->numero = $request->input('telefone');
            $telefone->competencias = $request->input('competencias');  
            $telefone->save();
        }
        
        return redirect('telefones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tel = telefone::find($id);
        if (isset($tel)){
            $tel->delete();
        }
        return redirect('telefones');
    }
}
