@extends('master')

@section('titulo')
    Alunos do curso de {{ $curso->designacao }}
@endsection
@section('conteudo')
    <div class="w-100 mb-2">
        <a class="btn btn-secondary w-100" href="/curso/{{ $curso->codigo }}">Voltar para a página do curso de {{ $curso->designacao }}</a>
    </div>
    @foreach($alunos as $aluno)
        @if($aluno->curso_id == $curso->id && $aluno->concluiu_curso != 1)
            <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="me-5">
                        <li>{{ $aluno->numero_aluno }}</li>
                    </div>
                    <div>
                        <li>{{ $aluno->nome }}</li>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">

                    <!--GET-->
                    <form id="edit-form" method="GET" action="/aluno/{{$aluno->numero_aluno}}" class="mb-1">
                        <input type="submit" class="btn btn-primary w-100" value="Ver percurso do aluno">
                    </form>
                </div>
            </ul>
        @endif
    @endforeach
@endsection
