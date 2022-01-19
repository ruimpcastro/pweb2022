@extends('master')

@section('titulo')
    Cursos
@endsection

@section('conteudo')
    <form id="edit-form" method="GET" action="/cursos/create">
    <div class="w-100 mb-3">
        <input type="submit" class="btn btn-primary w-100" value="Adicionar novo curso">
    </div>
    </form>

    @foreach($cursos as $curso)
            <ul class="d-flex justify-content-between flex-row ps-0">
                <div>
                <li style="list-style: none">{{ $curso->codigo }}</li>
                </div>
                <div>
                <a href="/curso/{{$curso->codigo}}"><li style="list-style: none">{{ $curso->designacao }}</li></a>
                </div>
                <div class="d-flex flex-row">

                    <!--EDIT-->
                    <form id="edit-form" method="GET" action="/curso/{{$curso->codigo}}" class="me-1">
                        <input type="submit" class="btn btn-secondary w-100" value="Editar curso">
                    </form>
                    <!--DELETE-->
                    <form id="delete-form" method="POST" action="/curso/{{$curso->id}}">
                        @csrf
                        {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </div>


            </ul>
    @endforeach
@endsection
