@extends('master')

@section('titulo')
    Plano do curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <div class="w-100 mb-3">
        <input type="submit" class="btn btn-primary w-100" value="Editar Plano de estudos">
    </div>

    @foreach($plano as $p)
        <p>cod: {{ $p->codigo }}</p>
        <a href="/disciplina/{{ $p->codigo }}"><p>des: {{ $p->designacao }}</p></a>
        <p>plano: {{ $p->plano }}</p>
        <p>semestre: {{ $p->semestre }}</p>
        <p>ano: {{ $p->ano }}</p>
    @endforeach
@endsection
