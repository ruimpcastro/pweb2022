<?php

namespace App\Domain;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Collection;


class CursoHandler
{

    public static function createCurso(int $codigo, string $designacao, OfertaLetiva $ofertaLetiva): Curso
    {
        return $ofertaLetiva::createCurso($codigo, $designacao);
    }

    public static function getCurso(int $codigo): Curso
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::getCurso($codigo);
    }

    public static function getCursos(): Collection
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::getCursos();
    }
}

