@extends('layout.app')

@section('body')
    <h1> Novo banner </h1>


    <form action="/banners" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type='file' id="imagem" name="imagem"/>
        </div>
        
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>

        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/banners' " />
    </form>



@endsection