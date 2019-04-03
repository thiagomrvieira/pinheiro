@extends('layout.app')

@section('body')
    <h1> Novo telefone útil</h1>


    <form action="/mais-telefones" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="orgao">Órgão</label>
            <input type="text" class="form-control" name="orgao" id="orgao" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" name="telefone" id="telefone" required>
        </div>

        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea class="form-control" name="intro" id="intro" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="competencias">Competências</label>
            <textarea class="form-control" name="competencias" id="texto" rows="5" required></textarea>
        </div>
        
        
     
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/mais-telefones' " />
    </form>



@endsection