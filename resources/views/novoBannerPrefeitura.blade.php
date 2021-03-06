@extends('layout.app')

@section('body')
    <h1>Prefeitura: Novo banner</h1>


    <form action="/prefeitura/banners" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type='file' id="imagem" name="imagem" required>
        </div>

        <div class="form-group">
            <label for="imgMobile">Imagem Mobile</label>
            <input type='file' id="imgMobile" name="imgMobile" required>
        </div>
        
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="link" id="link">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" required>
        </div>

        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/prefeitura/banners' " />
    </form>



@endsection