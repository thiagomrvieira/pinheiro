@extends('layout.app')

@section('body')
    <h1> Telefones </h1>
    
    @foreach ($telefones as $fone)

        <h4>Órgao:</h4> {{$fone->nome}} <br>
        <h4>Número:</h4> {{$fone->numero}} <br>


    @endforeach

@endsection