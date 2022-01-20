@extends('master')

@section('titulo')
    Disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    <!--TODO CRIAR PARA ESTA PÁGINA:
        - Botão para ver as pautas da disciplina
        - Botão para ver os alunos inscritos na disciplina
        - Botão para voltar atrás
    -->
    <!--Para a página de pautas-->
    @foreach($disciplina->pauta as $pauta)
        <p>
            {{$pauta->chave}}
        </p>
        <p>
        {{$pauta->designacao}}
        </p>
        <p>
            @if($pauta->dirty == 1)
                Pauta publicada
            @else
                Falta publicar pauta
            @endif
        </p>
    @endforeach

    <!--Para a página de alunos inscritos-->
    @foreach($disciplina->alunos as $aluno)
        <p>{{$aluno->numero_aluno}}</p>
        <p>{{$aluno->nome}}</p>
    @endforeach
@endsection
