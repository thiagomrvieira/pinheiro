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
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/telefones' " />

    
@endsection