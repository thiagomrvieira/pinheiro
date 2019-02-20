<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orgao;

class controladorOrgaos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgaos = Orgao::all();
        return view('orgaos', compact('orgaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoOrgao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orgao = new Orgao();
        $orgao->nome = $request->input('nome');
        $orgao->save();
        return redirect('orgaos');
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
        $orgao = Orgao::find($id);
        if (isset($orgao)){
            return view('editarOrgao', compact('orgao'));
        }
        return redirect('orgaos');
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
        $orgao = Orgao::find($id);
        if (isset($orgao)) {
            $orgao->nome = $request->input('nome');
            $orgao->save();
        }
        return redirect('orgaos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orgao = Orgao::find($id);
        if (isset($orgao)) {
            $orgao->delete();
        }
        return redirect('orgaos');

    }
}
