@extends('layout.app')

@section('body')
    <h1> Termos de uso </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar termos de uso</h5>
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
                    @foreach ($termos as $termo)
                        <tr>
                            <td>{{$termo->id}}</td>
                            <td>{{$termo->titulo}}</td>
                            <td>{!!$termo->texto!!}</td>
                            <td>
                                <a href="/termos/editar/{{$termo->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/termos/apagar/{{$termo->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/termos/novo" class="btn btn-sm btn-primary" role="button">Novo termo</a>
    
    </div>
    

@endsection