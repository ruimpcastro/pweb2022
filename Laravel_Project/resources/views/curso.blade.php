@extends('master')

@section('titulo')
    Curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <a href="/cursos" class="d-flex justify-content-center mb-2">Voltar à página anterior</a>
    <!--Aceder ao plano de estudos-->
    <form id="get-plano-estudo" method="GET" action="/planoestudo/{{$curso->id}}" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Aceder ao plano de estudos">
    </form>

    <!--Aceder à lista de alunos-->
    <form id="get-alunos" method="GET" action="/curso/{{ $curso->codigo }}/alunos" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Ver alunos inscritos">
    </form>

    <h3 class="mt-3"><b>Dashboard</b></h3>
    <h5><b>Média do curso:</b> {{$media}}</h5>
    <h5><b>Alunos desistentes:</b> {{$desistente}}</h5>
    <h5><b>Alunos que terminaram o curso:</b> {{$finalista}}</h5>

@endsection
