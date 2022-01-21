@extends('master')

@section('titulo')
    Alunos da disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    @foreach($disciplina->alunos as $aluno)

        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li>{{ $aluno->numero_aluno }}</li>
                </div>
                <div>
                    <!--<a href="/aluno/{{$aluno->numero_aluno}}">-->
                        <li>{{ $aluno->nome }}</li>
                    </a>
                </div>
            </div>
        </ul>
    @endforeach
@endsection
