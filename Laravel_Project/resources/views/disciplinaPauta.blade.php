@extends('master')

@section('titulo')
    Pautas da disciplina de {{ $disciplina->designacao }}
@endsection
@section('conteudo')
    @foreach($disciplina->pauta as $pauta)
        <p>
            {{$pauta->chave}}
        </p>
        <p>
            {{$pauta->designacao}}
        </p>
        <p>
            @if($pauta->dirty == 1)
                <button type="button" class="btn btn-secondary" disabled>Pauta publicada</button>

                <!--TODO Ligação para se poder visualizar a pauta publicada -->

                <a href="/pauta/{{ $pauta->chave }}" class="btn btn-primary">Visualizar pauta</a>
            @else

                <!--TODO Adicionar ligação entre dar upload do ficheiro e o guardar -->

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01">
                    <button type="button" method="POST" action="" class="btn btn-primary">Guardar</button>
                </div>
            @endif
        </p>
    @endforeach
@endsection
