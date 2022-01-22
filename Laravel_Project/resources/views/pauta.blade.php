@extends('master')

@section('titulo')
    Pauta de {{ $pauta->designacao }} - {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    <!--TODO Daniel-->
    {{ $pauta }}
    {{ $pauta->resultado }}
    {{ $disciplina }}

    @if($pauta->dirty == 1)


        <!--TODO Ligação para se poder visualizar a pauta publicada -->

        <p>Estado da Pauta: Publicada </p>
        <p>Resultados: </p>


    @else

        <!--TODO Adicionar ligação entre dar upload do ficheiro e o guardar -->

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            <p> Estado da Pauta: Por Publicar </p>
        </div>
    @endif


@endsection
