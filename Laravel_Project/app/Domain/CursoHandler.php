<?php

namespace App\domain;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Collection;

namespace App\Domain;

class CursoHandler
{

    public function createCurso(int $codigo, string $designacao,
                               OfertaLetiva $ofertaLetiva): Curso
    {
        return $ofertaLetiva->criarCurso($codigo, $designacao);
    }

    public function getCurso(int $codigo): Curso
    {
        $ofertaLetiva = new OfertaLetiva();
//        return new CursoDTO($ofertaLetiva->obterCurso($codigo));
        return $ofertaLetiva->getCurso($codigo);
    }

    public function getCursos(): Collection
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva->getCursos();
    }
}

