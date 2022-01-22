@extends('master')

@section('titulo')
    Plano do curso de {{ $curso->designacao }}
@endsection

@section('conteudo')
    <form id="edit-form" method="GET" action="/planoestudo/{{ $curso->id }}/edit">
        <div class="w-100 mb-1">
            <input type="submit" class="btn btn-primary w-100" value="Editar Plano de estudos">
        </div>
    </form>

    <div class="w-100 mt-2">
        <a class="btn btn-secondary w-100" href="/curso/{{ $curso->codigo }}">Voltar para a página do curso de {{ $curso->designacao }}</a>
    </div>

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
                            <a href="/disciplina/{{$p->codigo}}">
                                <li>{{ $p->designacao }}</li>
                            </a>
                        </div>
                    </div>
                    <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 60%; display: inline-block">
                        <p>{{ $p->plano }}</p>
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
                            <a href="/disciplina/{{$p->codigo}}">
                                <li>{{ $p->designacao }}</li>
                            </a>
                        </div>
                    </div>
                    <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 60%; display: inline-block">
                        <p>{{ $p->plano }}</p>
                    </div>

                </ul>
            @endif
        @endif
    @endforeach

    <h3 class="mt-5"><b>2º ano</b></h3>
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
                            <a href="/disciplina/{{$p->codigo}}">
                                <li>{{ $p->designacao }}</li>
                            </a>
                        </div>
                    </div>
                    <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 60%; display: inline-block">
                        <p>{{ $p->plano }}</p>
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
                            <a href="/disciplina/{{$p->codigo}}">
                                <li>{{ $p->designacao }}</li>
                            </a>
                        </div>
                    </div>
                    <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 60%; display: inline-block">
                        <p>{{ $p->plano }}</p>
                    </div>

                </ul>
            @endif
        @endif
    @endforeach
    <h3 class="mt-5"><b>3º ano</b></h3>
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
                            <a href="/disciplina/{{$p->codigo}}">
                                <li>{{ $p->designacao }}</li>
                            </a>
                        </div>
                    </div>
                    <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 60%; display: inline-block">
                        <p>{{ $p->plano }}</p>
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
                            <a href="/disciplina/{{$p->codigo}}">
                                <li>{{ $p->designacao }}</li>
                            </a>
                        </div>
                    </div>
                    <div class="ms-5 me-5 text-nowrap text-truncate" style="max-width: 60%; display: inline-block">
                        <p>{{ $p->plano }}</p>
                    </div>
                </ul>

            @endif
        @endif
    @endforeach
    <div style="height: 100px"></div>
@endsection
