@extends('layout.app')

@section('body')
    <h1> Editar banner</h1>


    <form action="/banners/{{$banner->id}}" method="POST" style="padding-bottom: 25px;">
        @csrf
        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type='file' id="imagem" name="imagem" value="{{$banner->imagem}}" >
        </div>

        <div class="form-group">
            <label for="imgMobile">Imagem Mobile</label>
            <input type='file' id="imgMobile" name="imgMobile" >
        </div>

        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="link" id="link" value="{{$banner->link}}">
        </div>

        <div class="form-group">
            <label for="titulo">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{$banner->descricao}}">
        </div>
       
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" name="Cancel" class="btn btn-danger" value="Cancel" onclick="window.location = '/banners' " />
    </form>



@endsection