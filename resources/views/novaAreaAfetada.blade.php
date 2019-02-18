@extends('layout.app')

@section('body')
    <h1> Nova área afetada</h1>


    <form action="/areas" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" name="texto" id="texto" rows="5" required></textarea >
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/areas' " />
    </form>



@endsection