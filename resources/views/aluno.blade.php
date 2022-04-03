@extends('master')

@section('titulo')
    {{ $aluno->numero_aluno }} {{$aluno->nome}}
@endsection

@section('conteudo')
    <h3 class="mb-3">Curso: {{$aluno->curso->designacao}}</h3>

    <h3>Disciplinas Inscrito</h3>
    @foreach($aluno->disciplinas as $disciplinas)
        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li>{{ $disciplinas->designacao }}</li>
                </div>
            </div>
        </ul>
    @endforeach
    <h3>Resultados</h3>
    @foreach($aluno->resultado as $resultado)
        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li>{{ $resultado->resultado }}</li>
                </div>
            </div>
        </ul>
    @endforeach
@endsection
