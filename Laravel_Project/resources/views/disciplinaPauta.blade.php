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
                <button type="button" class="btn btn-secondary" disabled>Pauta publicada</button>
            @else
                <button type="button" class="btn btn-primary">Inserir pauta</button>
            @endif
        </p>
    @endforeach
@endsection
