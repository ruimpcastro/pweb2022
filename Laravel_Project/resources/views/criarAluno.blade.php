@extends('form')

@section('titulo')
    Adicionar novo aluno
@endsection

@section('conteudo')
    <form method="post" action="/alunos/create">

        @csrf
        <p class="mb-0"><b>Número do aluno</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="0000"
            aria-label="Username"
            aria-describedby="numero-aluno"
            name="num"
            value={{ old('num')}}
        >

        <p class="mt-4 mb-0"><b>Nome do aluno</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="Nome"
            aria-label="Username"
            aria-describedby="nome aluno"
            name="nom"
            value={{ old('nom')}}
        >

        <p class="mt-4 mb-0"><b>Código do curso</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="Código curso"
            aria-label="Username"
            aria-describedby="codigo-curso"
            name="codigo_curso"
            value={{ old('codigo_curso')}}
        >

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <input type="submit" class="btn btn-primary w-100" value="Criar aluno">
        </div>
    </form>
@endsection
