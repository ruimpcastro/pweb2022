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

        <label for="exampleDataList" class="form-label">Curso</label>
        <input class="form-control" name="codigo_curso" list="datalistOptions" id="curso" placeholder="Insira um curso">
        <datalist id="datalistOptions">
            @foreach($curso as $c)
                <option value="{{$c->codigo}}">{{$c->codigo}} - {{$c->designacao}}</option>
            @endforeach
        </datalist>

        <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
            <div class="w-100 me-1">
                <input type="submit" class="btn btn-primary w-100" value="Criar aluno">
            </div>
            <div class="w-100 ms-1">
                <a class="btn btn-secondary w-100" href="/alunos">Voltar para a página de alunos</a>
            </div>
        </div>
    </form>
@endsection
