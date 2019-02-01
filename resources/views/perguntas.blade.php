@extends('layout.app')

@section('body')
    <h1> Perguntas e Respostas</h1>
  
    @foreach($perguntas as $per)

        <h4>Pergunta:</h4> {{$per->pergunta}} <br>
        <h4>Resposta:</h4>{{$per->resposta}} <br>
        <br>
    
    @endforeach

@endsection