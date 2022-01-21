@extends('master')

@section('titulo')
    Pauta de {{ $pauta->designacao }} - {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    <!--TODO Daniel-->
    {{ $pauta }}
    {{ $pauta->resultado }}
    {{ $disciplina }}
@endsection
