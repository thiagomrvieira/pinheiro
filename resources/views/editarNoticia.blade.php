@extends('layout.app')

@section('body')
    <h1> Editar notícia</h1>


    <form action="/noticias/{{$noticia->id}}" method="POST" style="padding-bottom: 25px;">
        @csrf
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type='file' id="imagemCapa" name="imagemCapa">
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{$noticia->titulo}}">
        </div>
        <div class="form-group">
            <label for="chapeu">Chapéu</label>
            <input type="text" class="form-control" name="chapeu" id="chapeu" value="{{$noticia->chapeu}}">
        </div>
        <div class="form-group">
            <label for="intro">Introdução</label>
            <input type="text" class="form-control" name="intro" id="intro" value="{{$noticia->intro}}">
        </div>
        <div class="form-group">
            <label for="reporter">Repórter</label>
            <input type="text" class="form-control" name="reporter" id="reporter" value="{{$noticia->reporter}}">
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" id="texto" name="texto" rows="7"> {{$noticia->texto}} </textarea >
             
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/noticias' " />
    </form>



@endsection