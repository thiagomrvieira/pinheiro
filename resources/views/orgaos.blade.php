@extends('layout.app')

@section('body')
    <h1> Órgaos </h1>

    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar Órgaos</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Órgao</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orgaos as $orgao)
                        <tr>
                            <td>{{$orgao->id}}</td>
                            <td>{{$orgao->nome}}</td>
                            <td>
                                <a href="orgaos/editar/{{$orgao->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="orgaos/apagar/{{$orgao->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>
    <div class="card-footer">
        <a href="/orgaos/novo" class="btn btn-sm btn-primary" role="button">Novo órgão</a>
    
    </div>

@endsection