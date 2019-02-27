@extends('layout.app')

@section('body')
    <h1> Editar pergunta</h1>


    <form action="/duvidas-frequentes/{{$pergunta->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pergunta">Nova pergunta: </label>
            <textarea class="form-control" name="pergunta" id="texto" rows="5"> {{$pergunta->pergunta}} </textarea>
        </div>
        <div class="form-group">
            <label for="resposta">Nova resposta</label>
            <textarea class="form-control" name="resposta" id="texto" rows="5">{{$pergunta->resposta}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/duvidas-frequentes' " />
    </form>



@endsection