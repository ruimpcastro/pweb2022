@extends('master')

@section('titulo')
    Aluno de {{ $aluno->curso->designacao }}
@endsection

@section('conteudo')
    <div class="w-100 d-flex justify-content-center align-items-center mt-2">
        <p>
            {{ $aluno->nome }} - nº {{ $aluno->numero_aluno }}
        </p>
    </div>
    @foreach($aluno->disciplinas as $disciplinas)
        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li>{{ $disciplinas->designacao }}</li>
                </div>
            </div>
        </ul>
    @endforeach
    @foreach($aluno->resultado as $resultado)
        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li>{{ $resultado }}</li>
                </div>
            </div>
        </ul>
    @endforeach
@endsection
