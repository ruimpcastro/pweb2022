@extends('form')

@section('titulo')
    Criar nova disciplina
@endsection

@section('conteudo')
    <form method="post" action="/disciplinas/create">

        @csrf
        <p class="mb-0"><b>Código da disciplina</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="000"
            aria-label="Username"
            aria-describedby="codigo-curso"
            name="cod"
            value={{ old('cod')}}
        >

        <p class="mt-4 mb-0"><b>Designação da desciplina</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="«Programação, Matemática"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="des"
            value={{ old('des')}}
        >

        <p class="mt-4 mb-0"><b>Semestre da disciplina</b></p>
        <input
            type="number"
            class="form-control"
            placeholder=" 1º ou 2º semestre"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="sem"
            value={{ old('sem')}}
        >

        <p class="mt-4 mb-0"><b>Ano da Disciplina</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="1º,2º,3º"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="an"
            value={{ old('an')}}
        >

        <p class="mt-4 mb-0"><b>Plano da Disciplina</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="Descricao sobre o que é dado na disciplina"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="pln"
            value={{ old('pln')}}
        >

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <input type="submit" class="btn btn-primary w-100" value="Criar disciplina">
        </div>
    </form>
@endsection
