@extends('master')

@section('titulo')
    {{ $curso->codigo }} {{ $curso->designacao }}

@endsection

@section('conteudo')
    <!--ROTA-->
    <!--ADD BOTÃO DE EDITAR CURSO-->

    <h3>Disciplinas</h3>
    <<!--ADD BOTÃO PARA ADICIONAR CURSO-->
    <!--NO FINAL DE CADA LINHA DA TABELA ADICIONAR UM BOTÃO X PARA ELIMINAR CURSO-->
    <!--ROTA-->
    @foreach($planoestudos as $disciplinas)
        <ul class="d-flex justify-content-around flex-row">
            <li style="list-style: none">{{ $disciplinas->codigo }}</li>
            <a href="/curso/{{$disciplinas->codigo}}"><li style="list-style: none">{{ $disciplinas->designacao }}</li></a>

            <!--DELETE-->
            <form id="delete-form" method="POST" action="/disciplinas/{{$disciplinas->id}}">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="X">
            </form>
        </ul>
    @endforeach
