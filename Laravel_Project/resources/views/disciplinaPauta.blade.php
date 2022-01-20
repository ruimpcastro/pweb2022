@extends('master')

@section('titulo')
    Alunos da disciplina de {{ $disciplina->designacao }}
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
            @else
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
            @endif
        </p>
    @endforeach
@endsection
