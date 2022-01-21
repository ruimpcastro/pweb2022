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
                placeholder={{ $disciplina->designacao }}
                aria-label="Username"
                aria-describedby="basic-addon1"
                name="des"
                value={{ $disciplina->designacao }}
            >
        </div>

        <p class="mt-4 mb-0"><b>Semestre disciplina</b></p>
        <div class="d-flex flex-row align-items-center">
            <input name="sem" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
            <datalist id="datalistOptions">
                <option value={{ $disciplina->semestre }}></option>
                <option value="1"></option>
                <option value="2"></option>
            </datalist>
        </div>

        <p class="mt-4 mb-0"><b>Ano da disciplina</b></p>
        <input
            type="number"
            class="form-control"
            placeholder="1º,2º,3º"
            aria-label="Username"
            aria-describedby="basic-addon1"
            name="an"
            value={{$disciplina->ano}}
        >

        <p class="mt-4 mb-0"><b>Plano da disciplina</b></p>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Insira o plano de estudo" id="floatingTextarea" name="pln">{{$disciplina->plano}}</textarea>
            <label for="floatingTextarea">Insira o plano de estuda da disciplina</label>
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
