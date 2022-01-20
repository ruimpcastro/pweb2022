@extends('master')

@section('titulo')
    Aluno de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <!--
    <form id="edit-form" method="GET" action="/alunos/{{$aluno->id}}" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Editar Aluno">
    </form>
    -->
@endsection
