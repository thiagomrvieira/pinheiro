@extends('layout.app')

@section('body')
    <h1> Novo plano de contingência  </h1>


    <form action="/plano-contingencia" method="POST" enctype="multipart/form-data">
        @csrf
        
        
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>

        <div class="form-group">
            <label for="texto">Texto</label>
            <textarea class="form-control" id="texto" name="texto" rows="7" required></textarea>
             
        </div>

        
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/plano-contingencia' " />
    </form>



@endsection