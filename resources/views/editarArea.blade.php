@extends('layout.app')

@section('body')
    <h1> Editar Área afetada</h1>


    <form action="/areas/{{$area->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{$area->titulo}}">
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" name="texto" id="texto" rows="5">{!!$area->texto!!}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/areas' " />
    </form>

    

@endsection