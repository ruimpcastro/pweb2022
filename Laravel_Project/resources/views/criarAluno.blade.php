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
            placeholder="000"
            aria-label="Username"
            aria-describedby="numero-aluno"
            name="cod"
            value={{ old('cod')}}
        >

        <p class="mt-4 mb-0"><b>Nome aluno</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="Informática"
            aria-label="Username"
            aria-describedby="name"
            name="des"
            value={{ old('des')}}
        >

        <p class="mt-4 mb-0"><b>Código curso</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="000"
            aria-label="Username"
            aria-describedby="codigo-curso"
            name="des"
            value={{ old('cod')}}
        >

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <input type="submit" class="btn btn-primary w-100" value="Criar aluno">
        </div>
    </form>
@endsection
