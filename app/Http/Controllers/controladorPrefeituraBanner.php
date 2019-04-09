<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BannerPrefeitura;

class controladorPrefeituraBanner extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = BannerPrefeitura::all();
        return view('bannersPrefeitura', compact('banner'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoBannerPrefeitura');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new BannerPrefeitura();
        $banner->descricao = $request->input('descricao');
        $banner->link = $request->input('link');
        
        $imagem = $request->file('imagem');
        $nome = $input['imagename'] = time() . "." . $imagem->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('imgBanners');
        $imagem->move($destinationPath, $input['imagename']);
        
        //$banner->imagem = $caminho . DIRECTORY_SEPARATOR . $nome;
        $banner->imagem = 'http://api.itec.al.gov.br/imgBanners' . DIRECTORY_SEPARATOR . $nome;
        $banner->save();
        return redirect('/prefeitura/banners');
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
        $banner = BannerPrefeitura::find($id);
        if (isset($banner)){
            return view('editarBannerPrefeitura', compact('banner'));
        }
        return redirect('/prefeitura/banners');
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
        $banner = BannerPrefeitura::find($id);
        if (isset($banner)) {
            $banner->imagem = $request->input('imagem');
            $banner->link = $request->input('link');

            $banner->descricao = $request->input('descricao');
            $banner->save();
        }
        
        return redirect('/prefeitura/banners');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = BannerPrefeitura::find($id);
        if (isset($banner)){
            $banner->delete();
        }
        return redirect('/prefeitura/banners');
    }

     // API
    public function bannersPrefeitura()
    {
        $banners = BannerPrefeitura::all();
        return response()->json($banners);
    }
}
