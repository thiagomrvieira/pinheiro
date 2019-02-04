@extends('layout.app')

@section('body')
    <h1> Perguntas</h1>

    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Perguntas e Respostas</h5>
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
                            <td>{{$per->pergunta}}</td>
                            <td>{{$per->resposta}}</td>
                            <td>
                                <a href="perguntas/editar/{{$per->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="perguntas/apagar/{{$per->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>
    <div class="card-footer">
        <a href="/perguntas/novo" class="btn btn-sm btn-primary" role="button">Nova pergunta</a>
    
    </div>

@endsection