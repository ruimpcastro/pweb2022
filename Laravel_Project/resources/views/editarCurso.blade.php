@extends('form')

@section('titulo')
    Editar curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <form method="PUT" action="/curso/{id}/edit">

        @csrf
        <p class="mb-0"><b>Código do curso</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="000"
            aria-label="Username"
            aria-describedby="codigo-curso"
            name="cod"
            value={{ $curso->codigo  }}
        >

        <p class="mt-4 mb-0"><b>Designação do curso</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="Informática"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="des"
            value={{ $curso->designacao }}
        >

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <input type="submit" class="btn btn-primary w-100" value="Criar Curso ">
        </div>
    </form>
@endsection
