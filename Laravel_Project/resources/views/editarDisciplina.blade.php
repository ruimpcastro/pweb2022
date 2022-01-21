@extends('form')

@section('titulo')
    Editar disciplina de {{ $disciplina->designacao }}
@endsection

@section('conteudo')
    <form method="POST" action="/disciplina/{{ $disciplina->codigo }}/edit">

        @csrf
        <p class="mt-4 mb-0"><b>Designação do disciplina</b></p>
        <div class="d-flex flex-row align-items-center">
            <p class="mb-0" style="min-width: 50px">{{ $disciplina->codigo }} -</p>
            <input
                type="text"
                class="form-control"
                placeholder="Introdução à Programação"
                aria-label="Username"
                aria-describedby="basic-addon1"
                name="des"
                value={{ $disciplina->designacao }}
            >
        </div>

        <p class="mt-4 mb-0"><b>Semestre disciplina</b></p>
        <div class="d-flex flex-row align-items-center">
            <p class="mb-0" style="min-width: 50px">{{ $disciplina->codigo }} -</p>
            <input
                type="text"
                class="form-control"
                placeholder="Introdução à Programação"
                aria-label="Username"
                aria-describedby="basic-addon1"
                name="des"
                value={{ $disciplina->designacao }}
            >
        </div>

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <div class="w-100 me-1">
                <input type="submit" class="btn btn-primary w-100" value="Editar Disciplina ">
            </div>
            <div class="w-100 ms-1">
                <a class="btn btn-secondary w-100" href="/disciplinas">Voltar para a página de disciplinas</a>
            </div>
        </div>
    </form>
@endsection
