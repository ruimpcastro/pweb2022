@extends('master')

@section('titulo')
    Cursos
@endsection

@section('conteudo')
    <!--ADD BOTÃO PARA ADICIONAR CURSO-->
    <!--NO FINAL DE CADA LINHA DA TABELA ADICIONAR UM BOTÃO X PARA ELIMINAR CURSO-->
    <!--ROTA-->
    <div class="w-100 mb-3">
        <input type="submit" class="btn btn-danger w-100" value="Adicionar curso">
    </div>


    @foreach($cursos as $curso)
            <ul class="d-flex justify-content-between flex-row ps-0">
                <div>
                <li style="list-style: none">{{ $curso->codigo }}</li>
                </div>
                <div>
                <a href="/curso/{{$curso->codigo}}"><li style="list-style: none">{{ $curso->designacao }}</li></a>
                </div>
                <div class="d-flex flex-row">

                    <input type="submit" class="btn btn-danger w-100 me-1" value="Editar curso">

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
