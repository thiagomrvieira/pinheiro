@extends('layout.app')

@section('body')
    <h1> Mapa </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, e apagar mapa com arquivos para download </h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Link do mapa</th>
                        <th>Arquivo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mapa as $map)
                        <tr>
                            <td>{{$map->id}}</td>
                            <td>{{$map->titulo}}</td>
                            <td>{!!$map->texto!!}</td>
                            <td>{{$map->link}}</td>
                            <td>{{$map->arquivo}}</td>
                            <td>
                                <a href="mapa/apagar/{{$map->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/mapa/novo" class="btn btn-sm btn-primary" role="button">Novo mapa</a>
    
    </div>
    

@endsection