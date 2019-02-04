@extends('layout.app')

@section('body')
    <h1> Editar pergunta</h1>


    <form action="/perguntas/{{$pergunta->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pergunta">Pergunta: </label><br>
            {{$pergunta->pergunta}} <br><br>
            <label for="resposta">Resposta: </label><br>
            {{$pergunta->resposta}} <br><br>
            
            <label for="pergunta">Nova pergunta: </label>
            <textarea class="form-control" name="pergunta" id="pergunta" value="{{$pergunta->nome}} " rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="resposta">Nova resposta</label>
            <textarea class="form-control" name="resposta" id="resposta" rows="5"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
    </form>



@endsection