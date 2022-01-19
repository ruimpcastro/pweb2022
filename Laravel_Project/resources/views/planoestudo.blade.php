@extends('master')

@section('titulo')
    Plano do curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <div class="w-100 mb-3">
        <input type="submit" class="btn btn-danger w-100" value="Criar curso">
    </div>

    @foreach($plano as $p)
        <p>cod: {{ $p->codigo }}</p>
        <a href="/disciplina/{{ $p->codigo }}"><p>des: {{ $p->designacao }}</p></a>
        <p>plano: {{ $p->plano }}</p>
        <p>semestre: {{ $p->semestre }}</p>
        <p>ano: {{ $p->ano }}</p>
    @endforeach
@endsection
