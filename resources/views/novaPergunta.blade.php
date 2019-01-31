@extends('layout.app')

@section('body')
    <h1> Nova pergunta</h1>


    <form action="/perguntas" method="POST">
        @csrf
        <div class="form-group">
            <label for="pergunta">Pergunta</label>
            <textarea class="form-control" name="pergunta" id="pergunta" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="resposta">Resposta</label>
            <textarea class="form-control" name="resposta" id="resposta" rows="5"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="cancel" class="btn btn-danger">Cancelar</button>
    </form>



@endsection