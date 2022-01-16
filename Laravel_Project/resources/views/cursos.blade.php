@extends('master')

@section('titulo')
    Cursos
@endsection

@section('conteudo')
    <!--ROTA-->
    @foreach($cursos as $curso)
            <ul class="d-flex flex-row">
                <li >{{ $curso->codigo }}</li>
                <a href="/curso/{{$curso->codigo}}"><li>{{ $curso->designacao }}</li></a>
            </ul>
    @endforeach
@endsection
