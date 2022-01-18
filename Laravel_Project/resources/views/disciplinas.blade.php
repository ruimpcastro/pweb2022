@extends('master')
@section('titulo')
    Disciplinas
@endsection

@section('conteudo')
    <!--ADD BOTÃO PARA ADICIONAR CURSO-->
    <!--NO FINAL DE CADA LINHA DA TABELA ADICIONAR UM BOTÃO X PARA ELIMINAR CURSO-->
    <!--ROTA-->
     @foreach($disciplinas as $disciplina)
        <ul class="d-flex justify-content-around flex-row">
            <li style="list-style: none">{{ $disciplina->codigo }}</li>
            <a href="/curso/{{$disciplina->codigo}}"><li style="list-style: none">{{ $disciplina->designacao }}</li></a>
            <li>{{$disciplina->semestre}}º Semestre do {{$disciplina->ano}}º Ano </li>

            <!--DELETE-->
        <form id="delete-form" method="POST" action="/disciplina/{{$disciplina->id}}">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="X">
            </form>
        </ul>
    @endforeach

@endsection
