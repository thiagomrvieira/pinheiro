@extends('layout.app')

@section('body')
    <h1> Nova Notícia </h1>


    <form action="/noticias" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo">
        </div>
        <div class="form-group">
            <label for="chapeu">Chapéu</label>
            <input type="text" class="form-control" name="chapeu" id="chapeu">
        </div>
        <div class="form-group">
            <label for="intro">Introdução</label>
            <input type="text" class="form-control" name="intro" id="intro">
        </div>
        <div class="form-group">
            <label for="reporter">Repórter</label>
            <input type="text" class="form-control" name="reporter" id="reporter">
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" id="texto" name="texto" rows="7"></textarea>
             
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
    </form>



@endsection