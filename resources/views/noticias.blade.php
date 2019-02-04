@extends('layout.app')

@section('body')
    <h1> Notícias </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Todas as Notícias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Chapéu</th>
                        <th>Intro</th>
                        <th>Repórter</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $not)
                        <tr>
                            <td>{{$not->id}}</td>
                            <td>{{$not->titulo}}</td>
                            <td>{{$not->chapeu}}</td>
                            <td>{{$not->intro}}</td>
                            <td>{{$not->reporter}}</td>
                            <td>{{$not->texto}}</td>
                            <td>
                                <a href="noticias/editar/{{$not->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="noticias/apagar/{{$not->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/noticias/novo" class="btn btn-sm btn-primary" role="button">Nova Notícia</a>
    
    </div>
    

@endsection