@extends('layout.app')

@section('body')
    <h1> Prefeitura: Banners </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar banner da prefeitura</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagem</th>
                        <th>Link</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banner as $b)
                        <tr>
                            <td>{{$b->id}}</td>
                            <td>{{$b->imagem}}</td>
                            <td>{{$b->link}}</td>
                            <td>{{$b->descricao}}</td>
                            <td>
                                <a href="/prefeitura/banners/editar/{{$b->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/prefeitura/banners/apagar/{{$b->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/prefeitura/banners/novo" class="btn btn-sm btn-primary" role="button">Novo</a>
    
    </div>
    

@endsection