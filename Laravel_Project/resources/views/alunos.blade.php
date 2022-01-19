@extends('master')

@section('titulo')
    Alunos
@endsection
@section('conteudo')
    <h3>Conteudo</h3>
    @foreach($alunos as $aluno)
        <ul class="d-flex justify-content-around flex-row">
            <li style="list-style: none">{{ $aluno->numero_aluno }}</li>
            <a href="/aluno/{{$aluno->numero_aluno}}"><li style="list-style: none">{{ $aluno->numero_aluno }} {{ $aluno->nome }}</li></a>
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
