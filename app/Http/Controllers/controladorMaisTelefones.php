<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MaisTelefones;


class controladorMaisTelefones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maisTel = MaisTelefones::all();
        return view('maisTelefones', compact('maisTel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoMaisTelefones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maisTelefone = new MaisTelefones();
        $maisTelefone->nome = $request->input('orgao');
        $maisTelefone->numero = $request->input('telefone');
        $maisTelefone->intro = $request->input('intro');
        $maisTelefone->competencias = $request->input('competencias');
        $maisTelefone->save();
        return redirect('/mais-telefones');
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
        $maisTelefone = MaisTelefones::find($id);
        if (isset($maisTelefone)){
            return view('editarMaisTelefone', compact('maisTelefone'));
        }
        return redirect('mais-telefones');
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
        $Maistelefone = MaisTelefones::find($id);
        if (isset($Maistelefone)){
            $Maistelefone->nome = $request->input('orgao');
            $Maistelefone->numero = $request->input('telefone');
            $Maistelefone->intro = $request->input('intro');
            $Maistelefone->competencias = $request->input('competencias');  
            $Maistelefone->save();
        }
        
        return redirect('mais-telefones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Maistelefone = MaisTelefones::find($id);
        if (isset($Maistelefone)){
            $Maistelefone->delete();
        }
        return redirect('mais-telefones');
    }

    // API
    public function telefones()
    {
        $Maistelefone = MaisTelefones::all();
        return response()->json($Maistelefone);
    }
}
