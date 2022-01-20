@extends('master')

@section('titulo')
    Curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <div class="w-100 d-flex justify-content-center align-items-center mt-2">
    <!--Aceder ao plano de estudos-->
        <div class="w-100 me-1">
    <form id="get-plano-estudo" method="GET" action="/planoestudo/{{$curso->id}}" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Aceder ao plano de estudos">
    </form>
        </div>

    <!--Aceder à lista de alunos-->
        <div class="w-100 ms-1">
    <form id="get-alunos" method="GET" action="/curso/{{ $curso->codigo }}/alunos" class="me-1">
        <input type="submit" class="btn btn-primary w-100" value="Ver alunos inscritos">
    </form>
        </div>
    </div>
    <div class="w-100 mt-2">
        <a class="btn btn-secondary w-100" href="/cursos">Voltar para a página de cursos</a>
    </div>

    <h3 class="mt-3"><b>Dashboard</b></h3>
    <h5><b>Média do curso:</b> {{$media}}</h5>
    <h5><b>Alunos desistentes:</b> {{$desistente}}</h5>
    <h5><b>Alunos que terminaram o curso:</b> {{$finalista}}</h5>

@endsection
