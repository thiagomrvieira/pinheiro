@extends('layout.app')

@section('body')
    <h1> Mais telefones úteis</h1>
    
    <div class="card border">
        <div class="card-body">
            <h5 class= "card-title"> Inserir, editar e apagar <b>mais telefones úteis</b></h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Órgão</th>
                        <th>Telefone</th>
                        <th>Intro</th>
                        <th>Competências</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($maisTel as $maisFone)
                        <tr>
                            <td>{{$maisFone->id}}</td>
                            <td>{{$maisFone->nome}}</td>
                            <td>{{$maisFone->numero}}</td>
                            <td>{!!$maisFone->intro!!}</td>
                            <td>{!!$maisFone->competencias!!}</td>
                            <td>
                                <a href="/mais-telefones/editar/{{$maisFone->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/mais-telefones/apagar/{{$maisFone->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>


    <div class="card-footer">
        <a href="/mais-telefones/novo" class="btn btn-sm btn-primary" role="button">Novo</a>
        <input type="button" name="Cancel" class="btn btn-sm btn-danger" value="Cancel" onclick="window.location = '/telefones' " />
    
        
    
    </div>
    
    
    

@endsection