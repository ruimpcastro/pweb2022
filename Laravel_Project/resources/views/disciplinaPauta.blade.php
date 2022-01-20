@extends('master')

@section('titulo')
    Alunos da disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
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
@endsection
