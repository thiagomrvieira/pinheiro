@extends('layout.app')

@section('body')
    <h1> Nova pergunta</h1>


    <form action="/perguntas" method="POST">
        @csrf
        <div class="form-group">
            <label for="pergunta">Pergunta</label>
            <textarea class="form-control" name="pergunta" id="texto" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="resposta">Resposta</label>
            <textarea class="form-control" name="resposta" id="texto" rows="5" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/perguntas' " />
    </form>



@endsection