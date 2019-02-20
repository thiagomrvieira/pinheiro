@extends('layout.app')

@section('body')
    <h1> Editar órgão  </h1>


    <form action="/orgaos/{{$orgao->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$orgao->nome}}"required>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/orgaos' " />
    </form>



@endsection