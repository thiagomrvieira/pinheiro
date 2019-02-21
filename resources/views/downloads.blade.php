@extends('layout.app')

@section('body')
    <h1> Banner com download de arquivo </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, e apagar banner com arquivos para download</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Arquivo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($downloads as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->descricao}}</td>
                            <td>{{$d->imagem}}</td>
                            <td>{{$d->arquivo}}</td>
                            <td>
                                <a href="download/apagar/{{$d->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/download/novo" class="btn btn-sm btn-primary" role="button">Novo banner</a>
    
    </div>
    

@endsection