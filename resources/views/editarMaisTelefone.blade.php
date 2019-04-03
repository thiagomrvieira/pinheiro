@extends('layout.app')

@section('body')
    <h1> Editar Telefones úteis</h1>


    <form action="/mais-telefones/{{$maisTelefone->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="orgao">Órgão: </label><br>
            <input type="text" class="form-control" name="orgao" id="orgao" value="{{$maisTelefone->nome}} ">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: </label><br>
            <input type="tel" class="form-control" name="telefone" id="telefone" value="{{$maisTelefone->numero}} ">
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control" name="intro" id="intro" rows="5" required> {!!$maisTelefone->intro!!}</textarea>
        </div>

        <div class="form-group">
            <label for="competencias">Competências</label>
            <textarea class="form-control" name="competencias" id="texto" rows="5">{!!$maisTelefone->competencias!!}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/mais-telefones' " />

    
@endsection