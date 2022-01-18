@extends('master')

@section('titulo')
    Alunos
@endsection

@section('conteudo')
    <h3>Conteudo</h3>
    <!--ADD BOTÃO PARA ADICIONAR CURSO-->
    <!--NO FINAL DE CADA LINHA DA TABELA ADICIONAR UM BOTÃO X PARA ELIMINAR CURSO-->
    <!--ROTA-->
    @foreach($alunos as $aluno)
        <ul class="d-flex justify-content-around flex-row">
            <li style="list-style: none">{{ $aluno->codigo }}</li>
            <a href="/aluno/{{$aluno->codigo}}"><li style="list-style: none">{{ $aluno->numero_aluno }{ $aluno->nome }}</li></a>
            <li></li>

            <!--DELETE-->
            <form id="delete-form" method="POST" action="/aluno/{{$aluno->id}}">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="X">
            </form>
        </ul>
    @endforeach
@endsection
