@extends('master')

@section('titulo')
    Alunos da disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    @foreach($disciplina->alunos as $aluno)
        <p>{{$aluno->numero_aluno}}</p>
        <p>{{$aluno->nome}}</p>
    @endforeach
@endsection
