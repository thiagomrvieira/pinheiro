<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Download;


class controladorDownload extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::all();
        return view('downloads', compact('downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoDownload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $download = new Download();
        $download->descricao = $request->input('descricao');
        
        //banner
        $imagem = $request->file('imagem');
        $nome = $input['imagename'] = time() . "." . $imagem->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('imgBanners');
        $imagem->move($destinationPath, $input['imagename']);
        $download->imagem = $caminho . DIRECTORY_SEPARATOR . $nome;
        
        //arquivo
        $arquivo = $request->file('arquivo');
        $nomeArquivo = $input['imagename'] = time() . "." . $arquivo->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('imgBanners');
        $arquivo->move($destinationPath, $input['imagename']);
        $download->arquivo = $caminho . DIRECTORY_SEPARATOR . $nome;

        $download->save();
        return redirect('/download');
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
        $download = Download::find($id);
        if (isset($download)) {
            $download->imagem = $request->input('imagem');
            $download->descricao = $request->input('descricao');
            $download->save();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Download::find($id);
        if (isset($download)) {
            $download->delete();
        }
        return redirect('download');

       
    }
}
