@extends('layout.app')

@section('body')
    <h1> {{$noticia->titulo}} </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar notícias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Imagem</th>
                        <th>Chapéu</th>
                        <th>Intro</th>
                        <th>Repórter</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <td>{{$noticia->id}}</td>
                            <td>{{$noticia->titulo}}</td>
                            <td>{{$noticia->imagemCapa}}</td>
                            <td>{{$noticia->chapeu}}</td>
                            <td>{{$noticia->intro}}</td>
                            <td>{{$noticia->reporter}}</td>
                            <td>{!!$noticia->texto!!}</td>
                            <td>
                                <a href="noticias/editar/{{$noticia->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="noticias/apagar/{{$noticia->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/noticias/novo" class="btn btn-sm btn-primary" role="button">Nova Notícia</a>
    
    </div>
    

@endsection