@extends('form')

@section('titulo')
    Editar curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <form method="POST" action="/curso/{{ $curso->codigo }}/edit">

        @csrf
        <p class="mt-4 mb-0"><b>Designação do curso</b></p>
        <div class="d-flex flex-row align-items-center">
            <p class="mb-0" style="min-width: 50px">{{ $curso->codigo }} -</p>
            <input
                type="text"
                class="form-control"
                placeholder="Informática"
                aria-label="Username"
                aria-describedby="basic-addon1"
                name="des"
                value={{ $curso->designacao }}
            >
        </div>
        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <div class="w-100 me-1">
                <input type="submit" class="btn btn-primary w-100" value="Editar Curso ">
            </div>
            <div class="w-100 ms-1">
                <a class="btn btn-secondary w-100" href="/cursos">Voltar para a página de cursos</a>
            </div>
        </div>
    </form>
@endsection
