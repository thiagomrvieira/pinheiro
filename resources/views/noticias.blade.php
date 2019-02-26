@extends('layout.app')

@section('body')
    <h1> Notícias </h1>
    
    <style> 
        
       
       table {
            width: 100%;
            max-width: 100%;
            overflow:hidden;       
        }
        .texto{
            overflow: hidden;
            position: relative;
            line-height: 1.2em;
            height: 70px !important;
            display: block;
            text-align: justify;
            margin-right: 5px;
            padding-right: 13px !important;
        }
        /* .texto:before {
            content: '...';
            position: absolute;
            right: 0;
            bottom: 0;
        }
        .texto:after {
            content: '';
            position: absolute;
            right: 0;
            width: 1em;
            height: 1em;
            margin-top: 0.2em;
            background: white; */
        }

    </style>

    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar notícias</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Imagem Capa</th>
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
                            <td class="texto">{{$not->titulo}}</td>
                            <td><img src={{$not->imagemCapa}} alt="capa"></td>
                            <td >{{$not->chapeu}}</td>
                            <td class="texto" >{{$not->intro}}</td>
                            <td >{{$not->reporter}}</td>
                            <td class="texto">{!!$not->texto!!}</td>
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