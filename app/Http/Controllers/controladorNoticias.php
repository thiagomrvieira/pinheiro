<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

use Illuminate\Support\Facades\Storage;


class controladorNoticias extends Controller
{
    // AUTENTICAÇÃO
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novaNoticia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new noticia();
        $noticia->titulo = $request->input('titulo');
        $noticia->chapeu = $request->input('chapeu');
        $noticia->intro = $request->input('intro');
        $noticia->reporter = $request->input('reporter');
        $noticia->texto = $request->input('texto');
        $noticia->slug = str_replace(' ', '-', strtolower($request->input('titulo')));

        //imagem capa
        $imagemCapa = $request->file('imagemCapa');
        $nome = $input['imagename'] = time() . "." . $imagemCapa->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('imgNoticias');
        $imagemCapa->move($destinationPath, $input['imagename']);
        $noticia->imagemCapa = 'http://api.itec.al.gov.br/imgNoticias' . DIRECTORY_SEPARATOR . $nome;
        //$noticia->imagemCapa = 'http://127.0.0.1:8000/imgNoticias' . DIRECTORY_SEPARATOR . $nome;
        $noticia->autoriaImagem = $request->input('autoria');
        $noticia->save();

        return redirect('/noticias');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return view('noticia', compact('noticia'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)){
            return view('editarNoticia', compact('noticia'));
        }
        return redirect('noticias');
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
        $noticia = Noticia::find($id);
        if (isset($noticia)) {
            $noticia->titulo = $request->input('titulo');
            $noticia->titulo = $request->input('titulo');
            $noticia->chapeu = $request->input('chapeu');
            $noticia->intro = $request->input('intro');
            $noticia->reporter = $request->input('reporter');
            $noticia->texto = $request->input('texto');
            $noticia->autoriaImagem = $request->input('autoria');
            $noticia->slug = str_replace(' ', '-', strtolower($request->input('titulo')));
            //imagem capa
            if ($request->hasFile('imagemCapa')) {
                Storage::delete($noticia->imagemCapa);
                $imagemCapa = $request->file('imagemCapa');
                $nome = $input['imagename'] = time() . "." . $imagemCapa->getClientOriginalExtension();
                $caminho = $destinationPath = public_path('imgNoticias');
                $imagemCapa->move($destinationPath, $input['imagename']);
                $noticia->imagemCapa = 'http://api.itec.al.gov.br/imgNoticias' . DIRECTORY_SEPARATOR . $nome;
                //$noticia->imagemCapa = 'http://127.0.0.1:8000/imgNoticias' . DIRECTORY_SEPARATOR . $nome;
            
            }

            $noticia->save();
           
        }
        
        return redirect('noticias');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)) {
            $noticia->delete();
        }
        return redirect('noticias');
    }

    // API - - - - - - - - - - - - - - - - 
    public function noticias()
    {
        $noticias = Noticia::all();
        return response()->json($noticias);
    }

    public function capa()
    {
        $noticias = Noticia::all();
        return response()->json($noticias);
    }

    public function noticia(Noticia $slug)
    {
        //$noticia = Noticia::find($slug);
        //if (isset($noticia)){
            return response()->json($slug);
        //}
    }

}
