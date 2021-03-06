@extends('layout.app')

@section('body')
    <h1> Editar Mapa com arquivos para download  </h1>


    <form action="/mapa/{{$mapa->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        
        <div class="form-group">
            <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" required value="{{$mapa->titulo}}">
        </div>

        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" id="texto" name="texto" rows="7" required>{{$mapa->texto}}</textarea>
             
        </div>

        <div class="form-group">
            <label for="link">Link do mapa</label>
            <input type="text" class="form-control" name="link" id="link" required value="{{$mapa->link}}">
        </div>

        <div class="form-group">
            <label for="arquivo">Arquivo</label>
            <input type='file' id="arquivo" name="arquivo" required >
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/mapa' " />
    </form>



@endsection