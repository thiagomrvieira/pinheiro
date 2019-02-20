<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

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

        //imagem capa
        $imagemCapa = $request->file('imagemCapa');
        $nome = $input['imagename'] = time() . "." . $imagemCapa->getClientOriginalExtension();
        $caminho = $destinationPath = public_path('imgNoticias');
        $imagemCapa->move($destinationPath, $input['imagename']);
        
        //$noticia->imagemCapa = $caminho . DIRECTORY_SEPARATOR . $nome;
        $noticia->imagemCapa = 'imgNoticias' . DIRECTORY_SEPARATOR . $nome;
        $noticia->save();

        return redirect('/noticias');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)){
            return view('noticia', compact('noticia'));
        }
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
            
             //imagem capa
            $imagemCapa = $request->file('imagemCapa');
            $nome = $input['imagename'] = time() . "." . $imagemCapa->getClientOriginalExtension();
            $caminho = $destinationPath = public_path('imgNoticias');
            $imagemCapa->move($destinationPath, $input['imagename']);
            
            //$noticia->imagemCapa = $caminho . DIRECTORY_SEPARATOR . $nome;
            $noticia->imagemCapa = 'http://testephp.itec.al.gov.br/public/imgNoticias' . DIRECTORY_SEPARATOR . $nome;
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

    // API
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

    public function noticia($id)
    {
        $noticia = Noticia::find($id);
        if (isset($noticia)){
            return response()->json($noticia);
        }
    }

}
