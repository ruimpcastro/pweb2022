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
            aria-label="codigo-disciplina"
            aria-describedby="codigo-disciplina"
            name="cod"
            value={{ old('cod')}}
        >

        <p class="mt-4 mb-0"><b>Designação da disciplina</b></p>
        <input
            type="text"
            class="form-control"
            placeholder="Programação, Matemática"
            aria-label="des"
            aria-describedby="des-disciplina"
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

        <p class="mt-4 mb-0"><b>Ano da disciplina</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="1º,2º,3º"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="an"
            value={{ old('an')}}
        >

        <p class="mt-4 mb-0"><b>Plano da disciplina</b></p>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Insira o plano de estudo" id="floatingTextarea" name="pln">{{ old('pln')}}</textarea>
            <label for="floatingTextarea">Insira o plano de estuda da disciplina</label>
        </div>
        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <div class="w-100 me-1">
                <input type="submit" class="btn btn-primary w-100" value="Criar disciplina">
            </div>
            <div class="w-100 ms-1">
                <a class="btn btn-secondary w-100" href="/disciplinas">Voltar para a página de disciplinas</a>
            </div>
        </div>
    </form>
@endsection
