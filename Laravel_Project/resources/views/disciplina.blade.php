@extends('master')

@section('titulo')
    Disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    <!--TODO CRIAR PARA ESTA PÁGINA:
        - Botão para ver as pautas da disciplina
        - Botão para ver os alunos inscritos na disciplina
        - Botão para voltar atrás
    -->
    <!--Para a página de pautas-->

    <div class="w-100pt-3 d-flex justify-content-center align-items-center mt-2">
        <!--Ver Pautas-->
        <div class="w-100 me-1">
            <form id="get-plano-estudo" method="GET" action="/planoestudo/{{$disciplina->id}}" class="me-1">
                <input type="submit" class="btn btn-primary w-100" value="Ver pautas">
            </form>
        </div>

        <!--Ver Alunos inscritos-->
        <div class="w-100 me-1">
            <form id="get-plano-estudo" method="GET" action="/planoestudo/{{$disciplina->id}}" class="me-1">
                <input type="submit" class="btn btn-primary w-100" value="Ver alunos inscritos">
            </form>
        </div>

        <!--Voltar atrás para a página das disciplinas-->
        <div class="w-100"> <!--me-1-->
            <a class="btn btn-secondary w-100" href="/disciplinas">Voltar para a página de disciplinas</a>
        </div>
    </div>

    @foreach($disciplina->pauta as $pauta)
        <p>
            {{$pauta->chave}}
        </p>
        <p>
        {{$pauta->designacao}}
        </p>
        <p>
            @if($pauta->dirty == 1)
                Pauta publicada
            @else
                Falta publicar pauta
            @endif
        </p>
    @endforeach

    <!--Para a página de alunos inscritos-->
    @foreach($disciplina->alunos as $aluno)
        <p>{{$aluno->numero_aluno}}</p>
        <p>{{$aluno->nome}}</p>
    @endforeach
@endsection
