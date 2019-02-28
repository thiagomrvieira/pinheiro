@extends('layout.app')

@section('body')
    <h1> Plano de Contingência </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, e apagar plano de contingencia </h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plano as $plan)
                        <tr>
                            <td>{{$plan->id}}</td>
                            <td>{{$plan->titulo}}</td>
                            <td>{!!$plan->text!!}</td>
                            <td>
                                <a href="plano-contingencia/apagar/{{$plan->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/plano-contingencia/novo" class="btn btn-sm btn-primary" role="button">Novo plano</a>
    
    </div>
    

@endsection