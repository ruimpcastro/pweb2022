@extends('auth')

@section('titulo')
    Login
@endsection
@section('conteudo')
    <p class="mb-0"><b>Username</b></p>
    <input type="text" class="form-control" placeholder="Insira o seu número de utilizador" aria-label="Username" aria-describedby="basic-addon1">
    <p class="mt-4 mb-0"><b>Password</b></p>
    <input type="password" class="form-control" placeholder="Insira a sua password" aria-label="Username" aria-describedby="basic-addon1">
    <div class="w-100 pt-3 d-flex justify-content-center align-items-center">
        <input type="button" class="btn btn-primary w-75" value="Login">
    </div>

    <div class="w-100 pt-3 d-flex justify-content-center align-items-center">
        <p>
            <a href="/register">Registar novo utilizador</a>
        </p>
    </div>
@endsection
