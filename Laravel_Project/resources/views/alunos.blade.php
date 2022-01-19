@extends('master')

@section('titulo')
    Alunos
@endsection
@section('conteudo')
    <form id="edit-form" method="GET" action="/alunos/create">
        <div class="w-100 mb-3">
            <input type="submit" class="btn btn-primary w-100" value="Adicionar novo aluno">
        </div>
    </form>

    @foreach($alunos as $aluno)
        <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <div class="me-5">
                    <li>{{ $aluno->numero_aluno }}</li>
                </div>
                <div>
                    <a href="/aluno/{{$aluno->numero_aluno}}">
                        <li>{{ $aluno->nome }}</li>
                    </a>
                </div>
            </div>
            <!--DELETE-->
            <form id="delete-form" method="POST" action="/aluno/{{$aluno->id}}" class="mb-1">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" value="X">
            </form>
        </ul>
    @endforeach
@endsection
