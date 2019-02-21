@extends('layout.app')

@section('body')
    <h1> Informações </h1>
    
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
                            <td>{{$info->orgao}}</td>
                            <td>
                                <a href="mapa/apagar/{{$info->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/info/novo" class="btn btn-sm btn-primary" role="button">Nova informação</a>
        <a href="/orgao/novo" class="btn btn-sm btn-primary" role="button">Novo órgao</a>
    </div>
    

@endsection