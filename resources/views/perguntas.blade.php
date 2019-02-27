@extends('layout.app')

@section('body')
    <h1> Dúvidas Frequentes</h1>

    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar dúvidas frequentes</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pergunta</th>
                        <th>Resposta</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perguntas as $per)
                        <tr>
                            <td>{{$per->id}}</td>
                            <td>{!!$per->pergunta!!}</td>
                            <td>{!!$per->resposta!!}</td>
                            <td>
                                <a href="duvidas-frequentes/editar/{{$per->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="duvidas-frequentes/apagar/{{$per->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>
    <div class="card-footer">
        <a href="/duvidas-frequentes/novo" class="btn btn-sm btn-primary" role="button">Nova pergunta</a>
    
    </div>

@endsection