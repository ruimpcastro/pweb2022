@extends('master')
@section('titulo')
    Cursos
@endsection
@section('conteudo')
    <form id="create-form" method="GET" action="/cursos/create">
        <div class="w-100 mb-3">
            <input type="submit" class="btn btn-primary w-100" value="Adicionar novo curso">
        </div>
    </form>

    @foreach($cursos as $curso)
            <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <div class="me-5">
                        <li >{{ $curso->codigo }}</li>
                    </div>
                    <div class="ms-5">
                        <a href="/curso/{{$curso->codigo}}">
                            <li>{{ $curso->designacao }}</li>
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center">

                    <!--EDIT-->
                    <form id="edit-form" method="GET" action="/curso/{{$curso->codigo}}/edit" class="me-3 mb-1">
                        <input type="submit" class="btn btn-secondary w-100" value="Editar curso">
                    </form>

                    <!--DELETE-->
                    <form id="delete-form" method="POST" action="/curso/{{$curso->id}}" class="mb-1">
                        @csrf
                        {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </div>
            </ul>
    @endforeach
@endsection
