@extends('layout.app')

@section('body')
    <h1> Atuação Integrada </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar informações e órgãos competentes </h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Competência</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informacoes as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->titulo}}</td>
                            <td>{!!$info->texto!!}</td>
                            <td>{{$info->orgao_id}}</td>
                            <td>
                                <a href="/atuacao-integrada/editar/{{$info->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/atuacao-integrada/apagar/{{$info->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/atuacao-integrada/novo" class="btn btn-sm btn-primary" role="button">Nova informação</a>
        <a href="/orgaos/novo" class="btn btn-sm btn-primary" role="button">Novo órgao</a>
    </div>
    

@endsection