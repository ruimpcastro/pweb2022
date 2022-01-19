@extends('master')

@section('titulo')
    Aluno de {{ $aluno->designacao }}
@endsection

@section('conteudo')
    <!--Aceder ao plano de estudos-->
    <form id="edit-form" method="GET" action="/aluno/{{$aluno->id}}" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Aceder ao plano de estudos">
    </form>
@endsection
