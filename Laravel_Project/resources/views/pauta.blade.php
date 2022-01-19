@extends('master')

@section('titulo')
    Pauta de {{ $disciplina->designacao }}
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
            {{$pauta->media}}
        </p>
    @endforeach
@endsection
