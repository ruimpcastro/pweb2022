<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Gestão de cursos 🔥</title>
</head>

<body style="height: 100vh; width: 100vw">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/login">Sign in</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Falta criar lógica para o Heroku da barra de navegações-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000")
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                    @endif

                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/cursos")
                            <li class="nav-item">
                                <a class="nav-link active" href="/cursos">Cursos</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/cursos">Cursos</a>
                            </li>
                        @endif

                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/alunos")
                            <li class="nav-item">
                                <a class="nav-link active" href="/alunos">Alunos</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/alunos">Alunos</a>
                            </li>
                        @endif

                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/avaliacoes")
                        <li class="nav-item">
                            <a class="nav-link active" href="/avaliacoes">Avaliações</a>
                        </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/avaliacoes">Avaliações</a>
                            </li>
                        @endif

                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/pautas")
                            <li class="nav-item">
                                <a class="nav-link active" href="/pautas">Pautas</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/pautas">Pautas</a>
                            </li>
                        @endif
                </ul>
            </div>
        </div>
    </nav>

    <!--- tinha antes w- 75, depois mudou-se para justify-content-center --->

    <h1 class="d-flex justify-content-center pt-3"><b>@yield('titulo')</b></h1>

    <div class="w-75  m-auto">
        <div class="border-bottom w-100" ></div>
        <div class="mt-1">
            @yield('conteudo')
        </div>
    </div>


</body>
</html>
