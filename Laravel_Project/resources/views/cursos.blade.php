@extends('master')

@section('titulo')
    Cursos
@endsection

@section('conteudo')
    <!--ADD BOTÃO PARA ADICIONAR CURSO-->
    <!--NO FINAL DE CADA LINHA DA TABELA ADICIONAR UM BOTÃO X PARA ELIMINAR CURSO-->
    <!--ROTA-->
    @foreach($cursos as $curso)
            <ul class="d-flex justify-content-around flex-row">
                <li style="list-style: none">{{ $curso->codigo }}</li>
                <a href="/curso/{{$curso->codigo}}"><li style="list-style: none">{{ $curso->designacao }}</li></a>
                <button type="button" class="btn btn-outline-dark btn-sm">x</button>
            </ul>
    @endforeach
@endsection
