@extends('master')

@section('titulo')
    Criar novo curso
@endsection

@section('conteudo')

    <form method="post" action="/cursos/create">

        @csrf

        <div>
            <label for="cod">Código do curso: </label>
            <input id="cod" type="number" value={{ old('cod')}}>
        </div>

        <div>
            <label for="des">Designação do curso: </label>
            <input id="des" value={{ old('des') }}>
        </div>

        <div>
            <input type="submit" value="Novo curso">
        </div>
    </form>

@endsection
