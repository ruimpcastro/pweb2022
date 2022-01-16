@extends('master')

@section('titulo')
    Cursos
@endsection

@section('conteudo')
    <!--ADD BOTÃO PARA ADICIONAR CURSO-->
    <!--NO FINAL DE CADA LINHA DA TABELA ADICIONAR UM BOTÃO X PARA ELIMINAR CURSO-->
    <!--ROTA-->
    @foreach($cursos as $curso)
            <ul class="d-flex flex-row">
                <li >{{ $curso->codigo }}</li>
                <a href="/curso/{{$curso->codigo}}"><li>{{ $curso->designacao }}</li></a>
            </ul>
    @endforeach
@endsection
