<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Termo;

class controladorTermos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $termos = Termo::all();
        return view('termos', compact('termos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoTermo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $termo = new Termo();
        $termo->titulo = $request->input('titulo');
        $termo->texto = $request->input('texto');
        $termo->save();
        return redirect('termos');
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
        $termo = Termo::find($id);
        if (isset($termo)) {
            return view('editarTermo', compact('termo'));
        }
        return redirect('termos');
        
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
        $termo = Termo::find($id);
        if (isset($termo)) {
            $termo->titulo = $request->input('titulo');
            $termo->texto = $request->input('texto');
            $termo->save();
        }
        return redirect('termos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $termo = Termo::find($id);
        if (isset($termo)) {
            $termo->delete();
        }
        return redirect('termos');
    }


    //API 
    public function termos(){
        $termos = Termo::all();
        return response()->json($termos);
    }

}
