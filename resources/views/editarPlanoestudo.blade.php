@extends('master')

@section('titulo')
    Editar Plano de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <div class="w-100 mt-2 mb-2" >
        <a class="btn btn-secondary w-100" href="/curso/{{ $curso->codigo }}">Voltar para a página do curso de {{ $curso->designacao }}</a>
    </div>

    <!--TODO Criar um if a verificar se o plano de estudos já tem a disciplina-->
    <!--TODO Adicionar Data List com os cursos para adicionar-->

    <form id="add-disciplina-form" method="POST" action="/planoestudo/{{$curso->id}}/edit">
        @csrf
        <div class="ms-1">
            <label for="exampleDataList" class="form-label"></label>
            <input name="disciplina" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="">
            <datalist id="datalistOptions">
                @foreach($disciplinas as $d)
                    <option value={{$d->codigo}}>{{$d->codigo}} {{$d->designacao}}</option>
                @endforeach
            </datalist>
        </div>
        <div class="w-100 mb-1">
            <input type="submit" class="btn btn-primary w-100 me-1" value="Adicionar disciplina ao plano">
        </div>
    </form>

    <h3><b>1º ano</b></h3>
    <h5><i>1º semestre</i></h5>
    @foreach($plano as $p)
        @if($p->ano == 1)
            @if($p->semestre == 1)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/{{$curso->codigo}}/edit" class="mb-1">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h4><i>2º semestre</i></h4>
    @foreach($plano as $p)
        @if($p->ano == 2)
            @if($p->semestre == 2)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/{{$p->id}}/edit" class="mb-1">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach

    <h3><b>2º ano</b></h3>
    <h5><i>1º semestre</i></h5>
    @foreach($plano as $p)
        @if($p->ano == 2)
            @if($p->semestre == 1)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/{{$p->id}}/edit" class="mb-1">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h4><i>2º semestre</i></h4>
    @foreach($plano as $p)
        @if($p->ano == 2)
            @if($p->semestre == 2)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/{{$p->id}}/edit" class="mb-1">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h3><b>3º ano</b></h3>
    <h5><i>1º semestre</i></h5>
    @foreach($plano as $p)
        @if($p->ano == 3)
            @if($p->semestre == 1)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/{{$p->id}}/edit" class="mb-1">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
    <h4><i>2º semestre</i></h4>
    @foreach($plano as $p)
        @if($p->ano == 3)
            @if($p->semestre == 2)
                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="me-5">
                            <li>{{ $p->codigo }}</li>
                        </div>
                        <div class="ms-5">
                            <li>{{ $p->designacao }}</li>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center"r>
                        <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 300px; display: inline-block">
                            <p>{{ $p->plano }}</p>
                        </div>
                        <form id="remove-form" method="POST" action="/planoestudo/{{$p->id}}/edit" class="mb-1">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Remover do plano">
                        </form>
                    </div>
                </ul>
            @endif
        @endif
    @endforeach
@endsection
