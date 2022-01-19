@extends('master')

@section('titulo')
    Aluno de {{ $aluno->designacao }}
@endsection

@section('conteudo')
    <form id="edit-form" method="GET" action="/alunos/{{$alunos->id}}" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="">
    </form>
@endsection
