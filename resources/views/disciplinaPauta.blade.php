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
                <form method="POST" action="/pauta/{{ $pauta->chave }}/edit" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="file" id="inputGroupFile01">
                        <input type="submit" name class="btn btn-primary" value="Publicar pauta">
                    </div>
                </form>
            @endif
        </p>
    @endforeach
@endsection
