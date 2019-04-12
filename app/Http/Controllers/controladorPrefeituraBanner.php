<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BannerPrefeitura;
use Illuminate\Support\Facades\Storage;

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
        $banner->imagem = 'http://api.itec.al.gov.br/imgBanners' . DIRECTORY_SEPARATOR . $nome;
        //$banner->imagem = 'http://127.0.0.1:8000/imgBanners' . DIRECTORY_SEPARATOR . $nome;
       
        //imagem mobile
        $img = $request->file('imgMobile');
        $name = $input['imagename'] = time() . "." . $img->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('imgMobile');
        $img->move($destinationPath, $input['imagename']);
        $banner->imgMobile = 'http://api.itec.al.gov.br/imgMobile' . DIRECTORY_SEPARATOR . $name;
        //$banner->imgMobile = 'http://127.0.0.1:8000/imgMobile' . DIRECTORY_SEPARATOR . $name;
        
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
            $banner->descricao = $request->input('descricao');
            $banner->link = $request->input('link');
            
            //Banner
            if ($request->hasFile('imagem')) {
                Storage::delete($banner->imagem);
                $imagem = $request->file('imagem');
                $nome = $input['imagename'] = time() . "." . $imagem->getClientOriginalExtension();
                $caminho = $destinationPath = public_path('imgBanners');
                $imagem->move($destinationPath, $input['imagename']);
                $banner->imagem = 'http://api.itec.al.gov.br/imgBanners' . DIRECTORY_SEPARATOR . $nome;
                //$banner->imagem = 'http://127.0.0.1:8000/imgBanners' . DIRECTORY_SEPARATOR . $nome;
            }
            
            
            //Imagem mobile
            if ($request->hasFile('imgMobile')) {
                Storage::delete($banner->imagem);
                $img = $request->file('imgMobile');
                $name = $input['imagename'] = time() . "." . $img->getClientOriginalExtension();
                $caminho = $destinationPath = public_path('imgMobile');
                $img->move($destinationPath, $input['imagename']);
                $banner->imgMobile = 'http://api.itec.al.gov.br/imgMobile' . DIRECTORY_SEPARATOR . $name;
                //$banner->imgMobile = 'http://127.0.0.1:8000/imgMobile' . DIRECTORY_SEPARATOR . $name;
            }
            
            
            
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
