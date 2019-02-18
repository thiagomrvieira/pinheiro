@extends('layout.app')

@section('body')
    <h1> Áreas afetadas </h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar texto</h5>
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
                    @foreach ($area as $area)
                        <tr>
                            <td>{{$area->id}}</td>
                            <td>{{$area->titulo}}</td>
                            <td>{!!$area->texto!!}</td>
                            <td>
                                <a href="areas/editar/{{$area->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="areas/apagar/{{$area->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>

    <div class="card-footer">
        <a href="/areas/novo" class="btn btn-sm btn-primary" role="button">Novo</a>
    
    </div>
    

@endsection