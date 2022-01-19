@extends('master')

@section('titulo')
    Curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <!--Aceder ao plano de estudos-->
    <form id="edit-form" method="GET" action="/planoestudo/{{$curso->id}}" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Aceder ao plano de estudos">
    </form>
@endsection
