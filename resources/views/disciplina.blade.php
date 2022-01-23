@extends('master')

@section('titulo')
    Disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    <div class="w-100 d-flex justify-content-center align-items-center mt-2">
        <!--Ver Pautas-->
        <div class="w-100 me-1">
            <form id="showPautas" method="GET" action="/disciplina/{{$disciplina->codigo}}/pautas" class="me-1">
                <input type="submit" class="btn btn-primary w-100" value="Ver pautas">
            </form>
        </div>

        <!--Ver Alunos inscritos-->
        <div class="w-100 ms-1">
            <form id="showAlunos" method="GET" action="/disciplina/{{$disciplina->codigo}}/alunos" class="ms-1">
                <input type="submit" class="btn btn-primary w-100" value="Ver alunos inscritos">
            </form>
        </div>
    </div>
        <!--Voltar atrás para a página das disciplinas-->
        <div class="w-100 mt-2">
            <a class="btn btn-secondary w-100" href="/disciplinas">Voltar para a página de disciplinas</a>
        </div>
@endsection
