@extends('master')

@section('titulo')
    Pauta de {{ $pauta->designacao }} - {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    @if($pauta->dirty == 1)
        <h3>Estado da Pauta: Publicada </h3>
        <h4>Resultados: </h4>


                @foreach($pauta->resultado as $res)
                    @foreach($aluno as $a)
                        @foreach($a->resultado as $result)
                                            @if ($res->id == $result->id)
                                                <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                                                    <div class="d-flex flex-row justify-content-center align-items-center w-100">
                                                        <div class="me-5 d-flex flex-row justify-content-between w-100">
                                                            <li>{{$a->numero_aluno}}</li>
                                                            <li>{{$a->nome}}</li>
                                                            <li>{{$res->resultado}}</li>
                                                        </div>
                                                    </div>
                                                </ul>
                                            @endif
                        @endforeach
                    @endforeach
                @endforeach

    @else
            <h3> Estado da Pauta: Por Publicar </h3>
    @endif

@endsection
