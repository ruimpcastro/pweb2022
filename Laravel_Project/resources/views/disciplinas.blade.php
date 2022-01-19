@extends('master')
@section('titulo')
    Disciplinas
@endsection

@section('conteudo')

    <!--Adicionar Disciplina-->
    <form id="edit-form" method="GET" action="/disciplinas/create">
        <div class="w-100 mb-3">
            <input type="submit" class="btn btn-primary w-100" value="Adicionar nova disciplina">
        </div>
    </form>
     @foreach($disciplinas as $disciplina)
         <ul style="list-style: none" class="d-flex justify-content-between align-items-center flex-row ps-0 border-bottom mb-3">
             <div class="d-flex flex-row justify-content-center align-items-center">
                 <div  class="me-5">
                     <li>{{ $disciplina->codigo }}</li>
                 </div>
                 <div class="ms-5">
                    <a href="/disciplina/{{$disciplina->codigo}}">
                        <li>{{ $disciplina->designacao }}</li>
                    </a>
                 </div>
             </div>
             <div class="d-flex flex-row justify-content-center align-items-center">
                 <div class="me-5">
                    <li>{{$disciplina->semestre}}º Semestre do {{$disciplina->ano}}º Ano </li>
                 </div>

                 <!--DELETE-->
                <form
                id="delete-form"
                method="POST"
                action="/disciplina/{{$disciplina->id}}"
                class="mb-1">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" value="X">
                </form>
             </div>
        </ul>
    @endforeach

@endsection
