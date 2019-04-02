@extends('layout.app')

@section('body')
    <h1> Editar Telefone</h1>


    <form action="/telefones/{{$tel->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="orgao">Órgão: </label><br>
            <input type="text" class="form-control" name="orgao" id="orgao" value="{{$tel->nome}} ">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: </label><br>
            <input type="tel" class="form-control" name="telefone" id="telefone" value="{{$tel->numero}} ">
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control" name="intro" id="intro" rows="5" required> {!!$tel->intro!!}</textarea>
        </div>

        <div class="form-group">
            <label for="competencias">Competências</label>
            <textarea class="form-control" name="competencias" id="texto" rows="5">{!!$tel->competencias!!}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/telefones' " />

    
@endsection