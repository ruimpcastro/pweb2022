@extends('master')

@section('titulo')
    Pauta de {{ $pauta }}
@endsection
@section('conteudo')
    @foreach($pauta as $p)
        <p>
            {{$p->chave}}
        </p>
        <p>
            {{$p->designacao}}
        </p>
        <p>
            {{$p->media}}
        </p>
    @endforeach
@endsection
