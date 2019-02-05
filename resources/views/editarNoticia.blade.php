@extends('layout.app')

@section('body')
    <h1> Editar pergunta</h1>


    <form action="/noticias/{{$noticia->id}}" method="POST">
        @csrf
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
        <button type="cancel" class="btn btn-danger">Cancelar</button>
    </form>



@endsection