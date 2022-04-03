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

<body class="" style="height: 100vh; width: 100vw; background-color: #edf2f7">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " style="z-index: 1000">
        <div class="container-fluid">
            <a class="navbar-brand" href="/cursos">Gestão de cursos 🔥</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Falta criar lógica para o Heroku da barra de navegações-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/cursos" || \Illuminate\Support\Facades\URL::current() == "http://pweb202204.herokuapp.com/cursos")
                        <li class="nav-item">
                            <a class="nav-link active" href="/cursos">Cursos</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/cursos">Cursos</a>
                        </li>
                    @endif

                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/disciplinas"  || \Illuminate\Support\Facades\URL::current() == "http://pweb202204.herokuapp.com/disciplinas")
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/disciplinas">Disciplinas</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/disciplinas">Disciplinas</a>
                        </li>
                    @endif

                    @if(\Illuminate\Support\Facades\URL::current() == "http://127.0.0.1:8000/alunos" || \Illuminate\Support\Facades\URL::current() == "http://pweb202204.herokuapp.com/alunos")
                        <li class="nav-item">
                            <a class="nav-link active" href="/alunos">Alunos</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/alunos">Alunos</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="sticky-top position-absolute w-100" style="height:100%; z-index: 500">
        <div class="d-flex justify-content-center align-items-stretch">
        <div class="card w-75" style="height: 100vh">
            <div class="card-body mt-5">
                <div>
                    <h3 class="d-flex justify-content-center">@yield('titulo')</h3>
                    @yield('conteudo')
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
