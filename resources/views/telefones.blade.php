@extends('layout.app')

@section('body')
    <h1> Telefones </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> 3 telefones na Home</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th> Órgão </th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($telefones as $fone)
                        <tr>
                            <td>{{$fone->nome}}</td>
                            <td>{{$fone->numero}}</td>
                            <td>
                                <a href="telefones/editar/{$fone->id}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="telefones/apagar/{$fone->id}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/perguntas/novo" class="btn btn-sm btn-primary" role="button">Novo telefone</a>
    
    </div>
    

@endsection