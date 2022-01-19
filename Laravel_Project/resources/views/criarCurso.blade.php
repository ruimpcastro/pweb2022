@extends('form')

@section('titulo')
    Criar novo curso
@endsection

@section('conteudo')
    <form method="post" action="/cursos/create">

        @csrf
        <p class="mb-0"><b>Código do curso</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="000"
            aria-label="Username"
            aria-describedby="codigo-curso"
            name="cod"
            value={{ old('cod')}}
        >

        <p class="mt-4 mb-0"><b>Designação do curso</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="Informática"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="des"
            value={{ old('des')}}
        >

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <input type="submit" class="btn btn-primary w-100" value="Criar curso">
        </div>
    </form>
@endsection
